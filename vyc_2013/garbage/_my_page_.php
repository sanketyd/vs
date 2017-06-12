
<?php function print_if_provided($parameter){
	if (isset($_POST[$parameter]) && $_POST[$parameter]!='null')
		echo $_POST[$parameter];
}

$event_name = array("Workshop on soft skills", "KBC", "Leadership Summit", "Stage Play", "Creative writing", "Career Counselling", "Essay Writing", "Extempore", "Quiz", "Painting Competition");
?>

<h1>Registration</h1>
<p>
	<div id="connecting">
		Connecting with database server ... 
	</div>

	<div id="login_with" style="display: none;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login with:
		<input type="radio" name="type" value="individual" checked/>Individual&nbsp;&nbsp;<input type="radio" name="type" value="school"/>School<br/>
		<a href="javascript:login('Google');"><img src="images/Gmail_Logo.png" class="open_logo" style="margin-left: 195px;"></img></a>
		<a href="javascript:login('Yahoo');"><img src="images/Yahoo_Logo.png" class="open_logo" style="margin-left: 10px;"></img></a>
	</div>

	<form name="indivisual_reg" id="indivisual_reg" action="http://vyc2013.appspot.com/update" method="GET" style="display: none;">
		<a style="float: right; text-decoration: underline; margin-right: 20px;" href="javascript:logout()">logout</a>
		<table>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><label id="individial_reg_email"></label></td>
			</tr>
			<tr>
				<td><label for="individial_reg_name">Name</label></td>
				<td>:</td>
				<td><input class="required" id="individial_reg_name" name='name' value=''/>*</td>
			</tr>
			<tr>
				<td><label for="individial_reg_institute">Institute</label></td>
				<td>:</td>
				<td><input class="required" id="individial_reg_institute" name='institute' value=''/>*</td>
			</tr>
			<tr>
				<td><label for="individial_reg_department">Department</label></td>
				<td>:</td>
				<td><input id="individial_reg_department" name='department' value=''/></td>
			</tr>
			<tr>
				<td><label for="individial_reg_mobileno">Mobile No.</label></td>
				<td>:</td>
				<td><input id="individial_reg_mobileno" name='mobileno' value=''/></td>
			</tr>
		</table>
		<br/>
		<br/>
		<b><span style="font-size: 0.8em">(Register in events from Events tab)</span></b>	
		<div style="text-align: center;">
			<input type="submit" value="Update"/>
		</div>
	</form>

	<div id="school_reg" style="display: none;">
		<form name="school_reg" id="school_reg_primary" action="http://vyc2013.appspot.com/update" method="GET">
			<a style="float: right; text-decoration: underline; margin-right: 20px;" href="javascript:logout()">logout</a>
			<table>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><label id="school_reg_email"></label></td>
				</tr>
				<tr>
					<td><label for="school_reg_school_name">School name</label></td>
					<td>:</td>
					<td>
						<select>
							<option value="0">Army school cantt</option>
							<option value="1">DPS Azad Nagar</option>
							<option value="2">DPS Kalyanpur</option>
							<option value="3">Dr.Virender Swaroop Girls High School,Mcrobert Ganj</option>
							<option value="4">Dr.Virender Swaroop Kidwai Nagar</option>
							<option value="5">Dr.Virendra Swaroop Awadhpuri</option>
							<option value="6">Gurunanak School</option>
							<option value="7">Gurunanal Girls Inter College</option>
							<option value="8">Huddard High School</option>
							<option value="9">Jain International</option>
							<option value="10">Jugal Devi Saraswati</option>
							<option value="11">Kanpur Vidya Mandir</option>
							<option value="12">Maharana Pratap School,Sharda Nagar</option>
							<option value="13">Mantora Public School</option>
							<option value="14">Mariumpur Sr. Secondary </option>
							<option value="15">Methodist High School</option>
							<option value="16">Pandit Deendayal</option>
							<option value="17">Puranchand Vidya Niketan</option>
							<option value="18">Seth Anandram Jaipuria</option>
							<option value="19">Sheiling House School</option>
							<option value="20">Sir Padampat Singhania Education Centre</option>
							<option value="21">St.Mary's Convent High</option>
							<option value="22">Surjadevi School</option>
							<option value="23">Swaraj India School</option>
							<option value="24">United Public School</option>
							<option value="25">UP Kirana</option>
							<option value="26">Woodbine Gardenia School</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="school_reg_name">Teacher's Name</label></td>
					<td>:</td>
					<td><input class="required" id="school_reg_name" name='teachers_name' value=''/>*</td>
				</tr>
				<tr>
					<td><label for="school_reg_mobileno">Mobile No.</label></td>
					<td>:</td>
					<td><input id="mobileno" name='mobileno' value='<?php print_if_provided('mobileno'); ?>'/></td>
				</tr>
			</table>
			<br/>
			<br/>
			<div style="text-align: center;">
				<input type="submit" value="Update"/>
			</div>
		</form>

		<form id="children_reg">
			<table id="children_reg_table" cellpadding="0" cellspacing="0" style="margin-top: 30px;">
				<tr>
					<th style="width: 85px;">Roll</td>
					<th style="width: 150px;">Name</td>
					<th class="event">Career<br/>Counselling</td>
					<th class="event">Essay<br/>Writing</td>
					<th class="event">Extempore</td>
					<th class="event">Quiz</td>
					<th class="event">Painting<br/>Competition</td>
					
				</tr>
				<tr>
					<td><input id="children_reg_roll_no" name="roll_no"/></td>
					<td><input id="children_reg_name" name="name" /></td>
					<td><input id="children_reg_event_5" name="event" value="5" type="checkbox"/></td>
					<td><input id="children_reg_event_6" name="event" value="6" type="checkbox"/></td>
					<td><input id="children_reg_event_7" name="event" value="7" type="checkbox"/></td>
					<td><input id="children_reg_event_8" name="event" value="8" type="checkbox"/></td>
					<td><input id="children_reg_event_9" name="event" value="9" type="checkbox"/></td>
				</tr>
			</table>
			
			<div style="text-align: center;">
			<input type="submit" value="add"/>
			</div>
		</form>
	</div>
</p>
<style>
#my_page-page .open_logo {
	width: 200px;
	padding: 5px;
	box-shadow: 0 0 5px #555;
	cursor: pointer;
}

#my_page-page td {vertical-align:middle !important;}

#my_page-page ul {list-style-type:none;}

#children_reg td {
	border: 1px solid black;
	text-align: center;
}

#children_reg th {
	border: 1px solid black;
	text-align: center;
}

#children_reg th.event {
	width: 100px;
}
</style>
