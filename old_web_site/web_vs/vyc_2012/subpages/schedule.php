<link rel="stylesheet" type="text/css" href="styles/style_ext.css" />
<link rel="stylesheet" type="text/css" href="styles/style_ext.css" />

<script type="text/javascript">
	function displayDay0Schedule()  {	
		$j('#day0_url').css('color', 'orange');
		$j('#day0_url').removeAttr('href');

		$j('#day0_schedule').show();
		$j('#day1_schedule').hide();
		$j('#day2_schedule').hide();
		$j('#day3_schedule').hide();

		$j('#day1_url').attr('href', '#');
		$j('#day2_url').attr('href', '#');
		$j('#day3_url').attr('href', '#');

		$j('#day1_url').css('color', 'black');
		$j('#day2_url').css('color', 'black');
		$j('#day3_url').css('color', 'black');
	}

	function displayDay1Schedule()  {
		$j('#day1_url').css('color', 'orange');
		$j('#day1_url').removeAttr('href');

		$j('#day1_schedule').show();
		$j('#day0_schedule').hide();
		$j('#day2_schedule').hide();
		$j('#day3_schedule').hide();

		$j('#day0_url').attr('href', '#');
		$j('#day2_url').attr('href', '#');
		$j('#day3_url').attr('href', '#');

		$j('#day0_url').css('color', 'black');
		$j('#day2_url').css('color', 'black');
		$j('#day3_url').css('color', 'black');
	}

	

	function displayDay2Schedule()  {
		$j('#day2_url').css('color', 'orange');
		$j('#day2_url').removeAttr('href');		

		$j('#day2_schedule').show();
		$j('#day0_schedule').hide();
		$j('#day1_schedule').hide();
		$j('#day3_schedule').hide();

		$j('#day0_url').attr('href', '#');
		$j('#day1_url').attr('href', '#');
		$j('#day3_url').attr('href', '#');
		
		$j('#day0_url').css('color', 'black');
		$j('#day1_url').css('color', 'black');
		$j('#day3_url').css('color', 'black');
	}

	function displayDay3Schedule()  {
		$j('#day3_url').css('color', 'orange');
		$j('#day3_url').removeAttr('href');

		$j('#day3_schedule').show();
		$j('#day0_schedule').hide();
		$j('#day1_schedule').hide();
		$j('#day2_schedule').hide();
		
		$j('#day0_url').attr('href', '#');
		$j('#day1_url').attr('href', '#');
		$j('#day2_url').attr('href', '#');
		

		$j('#day0_url').css('color', 'black');
		$j('#day1_url').css('color', 'black');
		$j('#day2_url').css('color', 'black');

	}
	
	$j(document).ready(function() {
		displayDay0Schedule();
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

<div>
	<a href='downloads/VYC_2012_schedule.pdf' style="color:blue; font-size:14px">Download schedule (pdf)</a>
</div>

<br>

<div>
	<span class='tabbed_url'><a href='#' onclick='displayDay0Schedule()' id='day0_url'>Day 0</a></span> &nbsp;
	<span class='tabbed_url'><a href='#' onclick='displayDay1Schedule()' id='day1_url'>Day 1</a></span> &nbsp;
	<span class='tabbed_url'><a href='#' onclick='displayDay2Schedule()' id='day2_url'>Day 2</a></span> &nbsp;
	<span class='tabbed_url'><a href='#' onclick='displayDay3Schedule()' id='day3_url'>Medical camp</a></span> &nbsp;
</div>

<br>

<table border='1'  id='day0_schedule'>
	<tr>
		<td colspan='3' align='center'>
			<div style='margin:5px; font-size:1.2em; color:brown'>Thursday, 12<sup>th</sup> January 2012 (National Youth Day)</div>
		</td>
	</tr>
	<tr>
		<td align='center'>
			<div style='margin:5px;'><b>Time</b></div>
		</td>
		<td align='center'>
			<div style='margin:5px;'><b>Program</b></div>
		</td>
		<td align='center'>
			<div style='margin:5px;'><b>Speaker</b></div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>17:45 - 18:00</div>
		</td>
		<td colspan='2'>
			<div style='margin:3px;' align='center'>Snacks & Tea</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>18:00 - 18:15</div>
		</td>
		<td>
			<div style='margin:3px;'><b style="color:#0000FF">Talk</b> - Relevance of Swami Vivekananda for the Youth</div>
		</td>
		<td>
			<div style='margin:3px;'>Prof. C S Upadhayay</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>18:15 - 18:30</div>
		</td>
		<td>
			<div style='margin:3px;'><b style="color:#0000FF">Talk</b> - Challenges before today's youth</div>
		</td>
		<td>
			<div style='margin:3px;'>Prof. A K Ghosh</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>18:30 - 19:00</div>
		</td>
		<td colspan='2'>
			<div style='margin:3px;'><b style="color:#0000FF">Open Audience Quiz</b> on Swami Vivekananda's life</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>19:00 - 19:30</div>
		</td>
		<td colspan='2'>
			<div style='margin:3px;'><b style="color:#0000FF">Movie</b> - Arise Awake!! on Life and Teachings of Swami Vivekananda</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style='margin:3px;'>19:30 - 20:00</div>
		</td>
		<td colspan='2'>
			<div style='margin:3px;'><b style="color:#0000FF">Announcement</b> of VYC 2012 and Recap of VYC 2011</div>
		</td>
	</tr>
</table>

<div id='day1_schedule'>
	<p style='color:DeepPink'>* indicates invited talk</p>
	<table border='1'>
		<tr>
			<td colspan='3' align='center'>
				<div style='margin:5px; font-size:1.2em; color:brown'>Saturday, 14<sup>th</sup> January, 2012</div>
			</td>
		</tr>
		<tr>
			<td align='center'>
				<div style='margin:5px;'><b>Time</b></div>
			</td>
			<td align='center'>
				<div style='margin:5px;'><b>Program</b></div>
			</td>
			<td align='center'>
				<div style='margin:5px;'><b>Speaker</b></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>10:00 - 10:30</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Registration</b> and High tea</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>10:30 - 11:00</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Inauguration</b></div>
			</td>
			<td rowspan='2'>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('swami_bhaktirupananda')">Swami Bhaktirupananda</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>11:00 - 12:00</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b><b style="color:DeepPink"> *</b> - Transformation of Narendranath Dutta to Swami Vivekananda</b></div>
			</td>

		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>12:00 - 13:00</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b><b style="color:DeepPink"> *</b></b> - Service to Humanity is Service to God</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('justice_palok_basu')">Mr. Palok Basu</a></div>
			</td>
		</tr>	
		<tr>
			<td>
				<div style='margin:3px;'>13:00 - 14:30</div>
			</td>
			<td colspan='2' align='center'>
				<div style='margin:3px;'>Lunch break</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>14:30 - 15:00</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Movie</b> -  Who Am I? (Scientific Analysis of the Self) released by Ramakrishna Mission</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>15:00 - 16:00</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b><b style="color:DeepPink"> *</b></b> - Indian Awakening and Swami Vivekananda</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('amar_singh')">Mr. Amar Singh</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>16:00 - 16:30</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk </b> - Setting Goals in Life</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('neeti_sharma')">Mrs. Neeti Sharma</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>16:30 - 16:45</div>
			</td>
			<td colspan='2' align='center'>
				<div style='margin:3px;'>Tea Break</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>16:45 - 17:30</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b> - The Science and Art of  Communication</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('dhirendra_katti')">Prof. Dhirendra S Katti</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>17:30 - 18:30</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Competition</b> - Group Discussion</div>
			</td>
		</tr>
	</table>	
</div>

<div id='day2_schedule'>
	<p style='color:DeepPink'>* indicates invited talk</p>
	<table border='1'>
		<tr>
			<td colspan='3' align='center'>
				<div style='margin:5px; font-size:1.2em; color:brown'>Sunday, 15<sup>th</sup> January, 2012</div>
			</td>
		</tr>
		<tr>
			<td align='center'>
				<div style='margin:5px;'><b>Time</b></div>
			</td>
			<td align='center'>
				<div style='margin:5px;'><b>Program</b></div>
			</td>
			<td align='center'>
				<div style='margin:5px;'><b>Speaker</b></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>10:30 - 11:30</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Competition</b> - Written Quiz Competition on Indian Culture</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>11:30 - 11:45</div>
			</td>
			<td colspan='2' align='center'>
				<div style='margin:3px;'>Tea Break</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>11:45 - 13:00</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b><b style="color:DeepPink"> *</b></b> - Karma Yoga and Fearlessness</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('vikram_singh')">Dr. Vikram Singh</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>13:00 - 14:30</div>
			</td>
			<td colspan='2' align='center'>
				<div style='margin:3px;'>Lunch break</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>14:30 - 15:00</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Movie</b> - Personality Development as seen by Swami Vivekananda</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>15:00 - 16:15</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Competition</b> - Extempore Competition</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>16:15 - 16:30</div>
			</td>
			<td colspan='2' align='center'>
				<div style='margin:3px;'>Tea Break</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>16:30 - 17:30</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b><b style="color:DeepPink"> *</b></b> - Swami Vivekananda and Youth Empowerment</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('rakesh_mittal')">Mr. Rakesh Mittal</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>17:30 - 18:30</div>
			</td>
			<td>
				<div style='margin:3px;'><b style="color:#0000FF">Talk</b> - Efficient Stress and Time Management for greater Success</div>
			</td>
			<td>
				<div style='margin:3px;'><a href="javascript:void(0)" onclick="openDialog('sarmistha_chakraborty')">Ms. Sarmistha Chakraborty</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style='margin:3px;'>18:30 - 19:00</div>
			</td>
			<td colspan='2'>
				<div style='margin:3px;'><b style="color:#0000FF">Prize Distribution</b> and Concluding Session</div>
			</td>
		</tr>
	</table>
</div>

<div id='day3_schedule'>
	<?php include("../subpages/medical_camp_jan_2012.html"); ?>
</div>

<br>


<div style="display:none">
	<?php include("speakers.html"); ?>
</div>
