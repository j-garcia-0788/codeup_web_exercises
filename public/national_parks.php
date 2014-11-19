<?PHP 

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'np_user');

define('DB_PASS', 'denali');

require '../inc/db_connect.php';

if (!isset($_GET['page'])) { 
		$page = 1;
		$offset = 0;
	} else { 
		$page = $_GET['page'];
		$offset = ($page-1) * 4;
	}; 
	
$query = "SELECT name, location, date_established, area_in_acres FROM national_parks LIMIT 4 OFFSET " . $offset;

$parks = $dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);

$count = $dbc->query("SELECT COUNT(*) FROM national_parks")->fetchColumn();

$next = $page+1;

$prev = $page-1;


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

	</style>

</head>
<body>

<h1>National Parks!</h1>
<div class="table">
	<table class="table table-striped">
		<tr> 
			<th>Name:</th>
			<th>State:</th>
			<th>Date Established:</th>
			<th>Area in Acres:</th>
		</tr>

		<?  foreach ($parks as $key => $park): ?>
			<tr>
			
			<?foreach ($park as $value): ?>
				
				<td><?= htmlspecialchars(strip_tags($value)); ?></td>

			<? endforeach; ?>

			</tr>	
			
		<? endforeach; ?>
	</table>
		<nav>
			<ul class ="pager">
			<? if ($page > 1):?>
				<a href="?page=<?= $prev ?>"><button type="button" class="btn btn-info">Prev</button></a>
			<? endif; ?>
			<? if ($page <= $count/4): ?>
				<a href="?page=<?= $next ?>"><button type="button" class="btn btn-info">Next</button></a>
			<? endif; ?>
			</ul>
		</nav>
	</div>
</body>
</html>