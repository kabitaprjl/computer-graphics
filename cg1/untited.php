<!DOCTYPE html>
<html>
<head>
	<title>Computer Graphics</title>
	<link rel="stylesheet" type="text/css" href="cg.css">
	</style>
</head>
<body style ="background-color:#7f8c8d">

<h1><front color="black">Computer Graphics Project</front></h1>
    <h2 align="left"><front color="black">Compare two text </front></h2>
    <h2></h2>
<div class="lineseparate"></div>
<form action=" " method="POST" class="form">
	<div class="form-group1">
	<textarea rows="4" cols="50" name="fmessage" placeholder="first text"><?php 
	if(isset($_POST['button']))
		{$a= $_POST['fmessage'];
		echo $a;
		}?></textarea><br>	
	</div>
	<div class="form-group">
	<textarea rows="4" cols="50" name="smessage" placeholder="second text"><?php 
	if(isset($_POST['button']))
		{$a= $_POST['smessage'];
		echo $a;
		}?></textarea><br>
	</div>
	<div class="form-group2">
	<input type="submit" name="button" value="check"></input>
	</div>
</form>

<?php
if(isset($_POST['button']))
	{
		//get text from form
		$firsttext = $_POST['fmessage'];
		$secondtext = $_POST['smessage'];

		//convert to arrary
		$array_ftext = explode(" ", $firsttext);
		$array_stext = explode(" ", $secondtext);

		//comparing both array
		for($i=0; $i<count($array_ftext); $i++)
		{
			if($array_ftext[$i] == $array_stext[$i])
				{
				$final[$i] = $array_ftext[$i];
				}
			else
				{
					$final[$i] = '<span style="color: red">' . $array_stext[$i] . '</span>';
				}
		}
		echo "<div class=\"final\">";
		echo implode(" ", $final);
		echo "</div>";
	}
?>

</body>
</html>
