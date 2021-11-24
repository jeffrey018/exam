<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="jquery-1.12.4.js"></script>
	<script src="jquery-ui.js"></script>

	<script>
		$(function(){ // set function for datepicker
			$(".datepicker").datepicker({
				dateFormat: 'yy-mm-dd',	//date format
				changeMonth: true,
				changeYear: true
			})
		})
	</script>
</head>
<body>
    <center>
    <h1>Check of diffrent two date</h1>
    </center>

	<form method="post" action="index.php">
		Date 1 :<br>
		<input type="text" name="date1" value="" class="datepicker">
		<br>
		Date 2 :<br>
		<input type="text" name="date2" value="" class="datepicker">
		<br>
		<br>
		<input type="submit" value="submit">
	</form>
  
	<?php 
		function DateDiff(){
			if(!empty($_POST['date1']) AND !empty($_POST['date2'])){ // condition if date1 and date is not empty
				$date1 = new DateTime($_POST['date1']); // create a variable that equal to new datetime
				$date2 = new DateTime($_POST['date2']);
				$Calcu = $date1->diff($date2); // calculate the difference of two dates
				echo "The Difference of two date is :".$Calcu->y."Years," .$Calcu->m."Months,".$Calcu->d."Days";
			}
		}

		DateDiff();
	?>

	
    
    
</body>
</html>