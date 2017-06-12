<link rel="stylesheet" type="text/css" href="styles/style_ext.css" />
<link rel="stylesheet" type="text/css" href="styles/style_ext.css" />

<script type="text/javascript">
	function displayQuizResult()  {	
		$j('#quiz_url').css('color', 'orange');
		$j('#quiz_url').removeAttr('href');

		$j('#quiz_result').show();
		$j('#gd_result').hide();
		$j('#extempore_result').hide();


		$j('#gd_url').attr('href', '#');
		$j('#extempore_url').attr('href', '#');

		$j('#gd_url').css('color', 'black');
		$j('#extempore_url').css('color', 'black');
	}

	function displayGDResult()  {
		$j('#gd_url').css('color', 'orange');
		$j('#gd_url').removeAttr('href');

		$j('#gd_result').show();
		$j('#quiz_result').hide();
		$j('#extempore_result').hide();

		$j('#quiz_url').attr('href', '#');
		$j('#extempore_url').attr('href', '#');

		$j('#quiz_url').css('color', 'black');
		$j('#extempore_url').css('color', 'black');
	}

	

	function displayExtemporeResult()  {
		$j('#extempore_url').css('color', 'orange');
		$j('#extempore_url').removeAttr('href');		

		$j('#extempore_result').show();
		$j('#quiz_result').hide();
		$j('#gd_result').hide();

		$j('#quiz_url').attr('href', '#');
		$j('#gd_url').attr('href', '#');
		
		$j('#quiz_url').css('color', 'black');
		$j('#gd_url').css('color', 'black');
	}

	
	$j(document).ready(function() {
		displayQuizResult();
	});
	
	function openDialog(speaker_id)  {
		$j("#" + speaker_id).dialog({
			width:500,
			resizable: false,
			modal: true,
			title: 'Speaker Profile',
			draggable: false,
			hide: "explode"
		});
		$j("#" + speaker_id).dialog();
	}
</script>


<br>

<div>
	<span class='tabbed_url'><a href='#' onclick='displayQuizResult()' id='quiz_url'>Quiz</a></span> &nbsp;
	<span class='tabbed_url'><a href='#' onclick='displayGDResult()' id='gd_url'>Group Discussion</a></span> &nbsp;
	<span class='tabbed_url'><a href='#' onclick='displayExtemporeResult()' id='extempore_url'>Extempore</a></span> &nbsp;
</div>

<br>

<table border='0'  id='quiz_result'>
	<tr>
		<td>
			<div style='margin:3px;'>Deepak Ojha</div>
		</td>
        </tr>
        <tr>
		<td>
			<div style='margin:3px;'>Nitish Kumar</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>Kapil Deo Gaur</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>Konark Bisht</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>Kumar Ankit</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>Ravi Ranjan</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>Sathish B Krishnan</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>V. Vignesh</div>
		</td>
        </tr>
        <tr>
		<td>
			<div style='margin:3px;'>Himmat Lal Kumawat</div>
		</td>
	</tr>
</table>

<div id='gd_result'>
	<table border='0'>
		<tr>
			<td>
				<div style='margin:3px;'>Robin Trakroo</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>Sathish B Krishnan</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>Major Ashwin Yadav</div>
			</td>
		<tr>
			<td>
				<div style='margin:3px;'>Rahul Rao</div>
			</td>
		</tr>	
		<tr>
			<td>
				<div style='margin:3px;'>Sreevidya Khatravath</div>
			</td>
		</tr>
	</table>	
</div>

<div id='extempore_result'>
        <table border='0'>
                <tr>
                        <td>
                                <div style='margin:3px;'>Robin Trakroo</div>
                        </td>
                </tr>
                <tr>
                        <td>
                                <div style='margin:3px;'>Siddharth Tyagi</div>
                        </td>
                </tr>
                <tr>
                        <td>
                                <div style='margin:3px;'>Sathish B Krishnan</div>
                        </td>
                </tr>
                <tr>
                        <td>
                                <div style='margin:3px;'>Major Ashwin Yadav</div>
                        </td>
                <tr>
                        <td>
                                <div style='margin:3px;'>Gaurav Saraf</div>
                        </td>
                </tr>
        </table>
</div>



<div style="display:none">
	<?php include("speakers.html"); ?>
</div>
