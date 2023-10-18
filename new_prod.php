<?php 
    //create a mySQL DB connection:
	include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    //testing connection success
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">  
		<title>form for new or update</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	    <div class="container">
		<h1>Save Product Details</h1>
			<form action="">
				
				<div class="mb-3">
					<label for="prodName1" class="form-label">Product name</label>
					<input type="text" class="form-control" id="prodName1" name="prodName" value="">
				</div>

				<div class="mb-3">
					<label for="prodImg1" class="form-label">Product image</label>
					<input type="text" class="form-control" id="prodImg1" name="prodImg" value="">
				</div>

				<div class="mb-3">
					<label for="cat" class="form-label">Category name</label>
					<select class="form-select" id="cat" name="catId" data-selected="">
						<option value="1">Shirts for men</option>
						<option value="2">Shirts for women</option>
						<option value="3">Shirts for children</option>
					</select>
				</div>

				<input type="hidden" name="status" value="">
				<input type="hidden" name="prodId" value="">
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
	    </div>
	</body>
</html>

<?php
    //close DB connection
    mysqli_close($connection);
?>