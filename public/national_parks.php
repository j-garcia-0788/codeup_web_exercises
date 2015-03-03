<?PHP 

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'np_user');

define('DB_PASS', 'denali');

require '../inc/db_connect.php';

$count = $dbc->query("SELECT COUNT(*) FROM national_parks")->fetchColumn();

if (!isset($_GET['page'])) { 
		$page = 1;
	} else { 
		$page = $_GET['page'];
	}; 
	
$offset = ($page-1) * 4;

$query = $dbc->prepare("SELECT name, location, date_established, area_in_acres, description 
						FROM national_parks ORDER BY name LIMIT 4 OFFSET :offset");
$query->bindValue(':offset', $offset, PDO::PARAM_INT);
$query->execute();
$parks = $query->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_POST)) 
{
	if
		(
			(empty($_POST['name'])) || 
			(empty($_POST['location'])) ||  
			(empty($_POST['date_established'])) ||
			(empty($_POST['area_in_acres'])) || 
			(empty($_POST['description']))
		)
	{
		$error = "All entries must have value.";

	} else {
			
			$post = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
					 VALUES (:name, :location, :date_established, :area_in_acres, :description)';
			$stmt = $dbc->prepare($post);
			$stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		    $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
		    $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
		    $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
		    $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
		    $stmt->execute();	
	}
}

?>

<html>
<head>
	
	<title>National Parks</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/address.css">

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		.parks {
			background-image: url('../img/missions.jpg');
			text-align: center;
			background-size: 100%;
		}

		.col-centered{
			float: none;
			margin: 0 auto;
		}
		.transparent {
			opacity:0.8;
			border-width: 2px;
			border-color: white;
			border-style: solid;
		}
		h1, h4 {
			color: white;
		}

		.descriptionbox {
			display: block;
		}

	</style>

</head>
<body class="parks">
	<? if(isset($error)): ?>
		<div class="alert alert-danger" role="alert">
	  		<p> <?= $error ?> </p>
		</div>
	<? endif; ?>
	
	<h1>National Parks!</h1>
	
	<p>==========================================================================================================================================================</p>
	
	<h4>Enter New Park</h4>

	<form method="POST" action="national_parks.php">
		<div class="form-inline">
			<div class="form-group">
				<label for="name">Enter Park Name:</label>
				<input class="form-control" id="name" name="name" placeholder="Enter Park Name" value ="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
			</div>
			<div class="form-group">
				<label for="State">State:</label>
				<input class="form-control" id="State" name="location" placeholder="State" value ="<?= isset($_POST['location']) ? $_POST['location'] : '' ?>">
			</div>
			<div class="form-group">
				<label for="Date Est">Date Established:</label>
				<input class="form-control" id="Date Est" name="date_established" placeholder="YYYY-MM-DD" value ="<?= isset($_POST['date_established']) ? $_POST['date_established'] : '' ?>">
			</div>
			<div class="form-group">
				<label for="Area">Area in Acres:</label>
				<input class="form-control" id="Area" name="area_in_acres" placeholder="Area" value="<?= isset($_POST['area_in_acres']) ? $_POST['area_in_acres'] : '' ?>">
			</div>
		</div>
		<div class="row">
			<label for="Description" class="col-sm-2 col-sm-offset-1">Description:</label>
			<div class="col-sm-8">
				<textarea class="form-control" rows="3"name="description" id="description" class="form-control" placeholder="Description of park" value ="<?= isset($_POST['description']) ? $_POST['description'] : '' ?>"></textarea>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-info">Add</button>
		</div>
	</form>
	<p>==========================================================================================================================================================</p>
	<div class="col-lg-11 col-centered">
		<div class="table">
			<table class="table table-striped table-hover transparent">
				<tr> 
					<th>Name:</th>
					<th>State:</th>
					<th>Date Established:</th>
					<th>Area in Acres:</th>
					<th>Description:</th>
				</tr>

				<? foreach ($parks as $key => $park): ?>
					
					<tr>
						<? foreach ($park as $value): ?>
							<td><?= htmlspecialchars(strip_tags($value)); ?></td>
						<? endforeach; ?>
					</tr>	
					
				<? endforeach; ?>
			</table>
			<nav>
				<ul class ="pager">
				<? if ($page > 1):?>
					<a href="?page=<?= $page-1 ?>"><button type="button" class="btn btn-info">Prev</button></a>
				<? endif; ?>
				<? if ($page <= $count/4): ?> <!--ask what this is-->
					<a href="?page=<?= $page+1 ?>"><button type="button" class="btn btn-info">Next</button></a>
				<? endif; ?>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>