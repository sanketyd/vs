<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("subpages/import_libraries.php"); ?>
	<title>VYC 2012: Schedule</title>
</head>
<body>

<div id='top_part'>
	<?php include("subpages/top_pane.php"); ?>
			
	<script type="text/javascript">
		highlightUrl("schedule_url");
	</script>
</div>

<div id='left_part'>
	<?php include("subpages/left_pane.php"); ?>
</div>
		
<div id="content">
	<div class="box">
		<div class="textArea">
			<h2 style="font-size:16px">VYC 2012 schedule</h2>
			<?php include("subpages/schedule.php"); ?>
			<p class="bottom">&nbsp;&nbsp;</p>
		</div>
	</div>
</div>

<div id='right_part'>
	<?php include("subpages/right_pane.php"); ?>
</div>

<div id="footer">
	<p></p>
</div>

</body>
</html>
