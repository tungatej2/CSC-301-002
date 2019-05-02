<?php
include ('config.php');
include ('functions.php');

$action = $_GET['action'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Cats</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<h1>What is your favorite Kind of Cat?</h1>
		<form action="" method="POST">
			<div class="form-element">
				<input type="radio" name="bigCat" value="bigCat">Big Cat<br>
				<input type ="radio" name="smallCat" value="smallCat">Small Cat<br>
				<input type="radio" name="dog" value="dog">Dog Person<br>
				<input type="radio" name="all" value="all">All Cats<br>
				<input type="submit" value="Submit" onclick="checkSubmitType()">
			</div>
		</form>
		<form action='function.php' method='post'>
			<?php echo "Add suggestions for additional cats:" ?> <br>
			<input type="text" value="suggest" name="suggest" id="text1"><br>
			<input type="submit" id="display" name="display"><br>
			
		</form>	
	</div>
	
	<script type = "text/javascript">
		function chekcSubmitType()
	{
		if(document.getElementByvalue('bigCat').checked)
		{
        window.location="bigCat.html"; 
		}
		else if(document.getElementByvalue('smallCat').checked)
		{
         window.location="smallCat.html";
		}
		else if(document.getElementByvalue('dog').checked)
		{
         window.location="dog.html";
		}
		else if(document.getElementByvalue('all').checked)
		{
         window.location="all.html";
		}

	}
	</script>
</body>
</html>