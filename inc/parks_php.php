<?php
if (!empty($_POST)) {
		
		try {
			
			$addbook->validate($_POST);
			if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state'])
					 || empty($_POST['zip']) || empty($_POST['phone'])) {
				

			} else {
				
					$newEntry['name'] = $_POST['name'];
		
					$newEntry['address'] = $_POST['address'];		
				
					$newEntry['city'] = $_POST['city'];
				
					$newEntry['state'] = $_POST['state'];
				
					$newEntry['zip'] = $_POST['zip'];
				
					$newEntry['phone'] = $_POST['phone'];
				
				
				$addresses[]=$newEntry;
				$addbook->write($addresses);
			}
			} catch (InvalidInputException $e) {
	    			$error = $e->getMessage();
    		}
		}