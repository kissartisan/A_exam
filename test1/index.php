<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<style type="text/css">
		.card-primary > .card-block {
			color: #fff;
			text-align: center;
		}

		.list-group-item {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		$arrays = [
			$arr1 = ['1st-array-index-0', '1st-array-index-1', '1st-array-index-2', '1st-array-index-3', '1st-array-index-4', '1st-array-index-5', '1st-array-index-6', '1st-array-index-7', '1st-array-index-8', '1st-array-index-9'],
			$arr2 = ['2nd-array-index-0', '2nd-array-index-1', '2nd-array-index-2', '2nd-array-index-3', '2nd-array-index-4', '2nd-array-index-5', '2nd-array-index-6', '2nd-array-index-7', '2nd-array-index-8', '2nd-array-index-9'],
			$arr3 = ['3rd-array-index-0', '3rd-array-index-1', '3rd-array-index-2', '3rd-array-index-3', '3rd-array-index-4', '3rd-array-index-5', '3rd-array-index-6', '3rd-array-index-7', '3rd-array-index-8', '3rd-array-index-9'],
			$arr4 = ['4th-array-index-0', '4th-array-index-1', '4th-array-index-2', '4th-array-index-3', '4th-array-index-4', '4th-array-index-5', '4th-array-index-6', '4th-array-index-7', '4th-array-index-8', '4th-array-index-9'],
			$arr5 = ['5th-array-index-0', '5th-array-index-1', '5th-array-index-2', '5th-array-index-3', '5th-array-index-4', '5th-array-index-5', '5th-array-index-6', '5th-array-index-7', '5th-array-index-8', '5th-array-index-9'],
			$arr6 = ['6th-array-index-0', '6th-array-index-1', '6th-array-index-2', '6th-array-index-3', '6th-array-index-4', '6th-array-index-5', '6th-array-index-6', '6th-array-index-7', '6th-array-index-8', '6th-array-index-9'],
			$arr7 = ['7th-array-index-0', '7th-array-index-1', '7th-array-index-2', '7th-array-index-3', '7th-array-index-4', '7th-array-index-5', '7th-array-index-6', '7th-array-index-7', '7th-array-index-8', '7th-array-index-9'],
			$arr8 = ['8th-array-index-0', '8th-array-index-1', '8th-array-index-2', '8th-array-index-3', '8th-array-index-4', '8th-array-index-5', '8th-array-index-6', '8th-array-index-7', '8th-array-index-8', '8th-array-index-9'],
			$arr9 = ['9th-array-index-0', '9th-array-index-1', '9th-array-index-2', '9th-array-index-3', '9th-array-index-4', '9th-array-index-5', '9th-array-index-6', '9th-array-index-7', '9th-array-index-8', '9th-array-index-9'],
			$arr10 = ['10th-array-index-0', '10th-array-index-1', '10th-array-index-2', '10th-array-index-3', '10th-array-index-4', '10th-array-index-5', '10th-array-index-6', '10th-array-index-7', '10th-array-index-8', '10th-array-index-9'],
		];

		$rand1 = rand(0, 9);
		$rand2 = rand(0, 9);
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
			<div class="card card-primary">
			  <div class="card-block">
			    <h4 class="card-title">Random arrays</h4>
			    <p class="card-text white-text">This was a random generated numbers of arrays and array values <br> after loading the web page.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <?php
						for ($ctr=0; $ctr<=$rand1; $ctr++) {
							for($ctr2=0; $ctr2<=$rand2; $ctr2++) {
							echo '<li class="list-group-item">' . $arrays[$ctr][$ctr2] . '</li>';
							}
						}
					?>
			  </ul>
			</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
