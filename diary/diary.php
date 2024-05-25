<?php 
// diary app, enter date and text, at end of day it gets saved to a db for future retrieval 
// constant file for user to write into every day 


if( file_exists("diary.txt"))
{
	$handle = fopen("diary.txt", 'r');
	$data = nl2br(fread($handle,filesize("diary.txt")));
	fclose($handle);
}
else {$data = "Enter thoughts for the day";}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diary App</title>
</head>
<body>
	<hr />
	<div class="container">
		<div class="row">
			<div class="col-md-8 float-left">
				<h3>Welcome to your diary</h3><hr />
				<p class="form-control btn btn-primary">Submit new entry.</p>
				<form class="form-control" method="post" id="form">
				<input type="text" rows="3" scrollable id="day" class="form-control" placeholder="Date of today = D/M/Y" name="">
				<br />
				<textarea id="txt" rows="7" placeholder="<?php echo $data; ?>" class="form-control"></textarea> <br />
				<br />

				<input type="submit" id="btnD" class="btn btn-primary" value="Update Diary" name="submit">&nbsp;&nbsp;
				<span id="btnDRez"></span>
				</form>
			</div>

			<div class="col-md-4 float-right rounded" style="box-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
				<h3>Previous Diary entries</h3><hr />
				<ol class="list-group list-group-flush">
					<li class="list-group-item active list-group-item-action">Latest</li>
					<li class="list-group-item list-group-item-action">Prev 5</li>
					<li class="list-group-item list-group-item-action">Prev 4</li>
					<li class="list-group-item list-group-item-action">Prev 3</li>
					<li class="list-group-item list-group-item-action">Prev 2</li>
					<li class="list-group-item list-group-item-action">Prev 1</li>
				</ol>
			</div>
	</div>
	</div>
	<hr />

	<link href="uploadtogit/jquery_and_css3_animations/style.css" rel="stylesheet" />
	<link href="uploadtogit/jquery_and_css3_animations/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="uploadtogit/jquery_and_css3_animations/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="uploadtogit/jquery_and_css3_animations/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="uploadtogit/jquery_and_css3_animations/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$("document").ready(function(data)
		{
			$("#form").on("submit",function()
			{
				var day = $("#day").val();
				var txt = $("#txt").val();
				var rez = $("#btnDRez");

				if( day !== '' && txt !== '' )
				{
					rez.html('Processing ...');
					$.post("diary2.php",{'day': day,'txt' : txt},function(data)
						{
							rez.html(data);
						});
					return false;
				}
				else
				{
					rez.html('Ensure none of the fields is empty ...');
					return false;
				}
			});
		});
	</script>
</body>
</html>
