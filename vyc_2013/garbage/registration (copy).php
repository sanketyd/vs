
<?php function print_if_provided($parameter){
	if (isset($_POST[$parameter]) && $_POST[$parameter]!='null')
		echo $_POST[$parameter];
}

$event_name = array("Workshop on soft skills", "KBC", "Leadership Summit", "Stage Play", "Creative writing", "Career Counselling", "Essay Writing", "Extempore", "Quiz", "Painting Competition");
?>

<h1>Registration</h1>
<p>
	<div id="connecting">
		Connecting with registration server ... 
	</div>

	<div id="login_with" style="display: none;">
		
		<input type="hidden" name="type" value="individual"/><!--Individual&nbsp;&nbsp; <input type="radio" name="type" value="school" disabled/>School<br/>-->
		For Collage events, login with:<br/>
		<a href="javascript:login('Google');"><img src="images/Gmail_Logo.png" class="open_logo" style="margin-left: 195px;"></img></a>
		<a href="javascript:login('Yahoo');"><img src="images/Yahoo_Logo.png" class="open_logo" style="margin-left: 10px;"></img></a>
		<br/>
		<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School registrations will start this monday.-->
		<br/>
		<br/>
		<br/>
		<br/>
		For school events, download the following file, fill your students name and email <br/>
		To: <a href="mailto:vsamiti@iitk.ac.in">vsamiti@iitk.ac.in</a>, with<br/>
		Subject: <b>VYC School Name</b><br/>
		To download the file click <a href="http://iitk.ac.in/vs/vyc_2013/docs/VYC%20School%20Entries.xls">here.</a>
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
		<b>Registered events: <span style="font-size: 0.8em">(Register in events from Events tab)</span></b>
		<div id="registered_events"></div>
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
					<td><label for="school_reg_name">Teacher's Name</label></td>
					<td>:</td>
					<td><input class="required" id="school_reg_name" name='teachers_name' value=''/>*</td>
				</tr>
				<tr>
					<td><label for="school_reg_mobileno">Mobile No.</label></td>
					<td>:</td>
					<td><input id="mobileno" name='mobileno' value='<?php print_if_provided('mobileno'); ?>'/></td>
				</tr>
				<tr style="border-top: 1px solid #555;">
					<td><label for="school_reg_school_name">School name</label></td>
					<td>:</td>
					<td><input class="required" id="school_reg_school_name" name='school_name' value=''/>*</td>
				</tr>
				<tr>
					<td><label for="school_reg_school_address">School Address</label></td>
					<td>:</td>
					<td><textarea id="school_reg_school_address" name='school_address' ></textarea></td>
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
	

#registration-page .open_logo {
	width: 200px;
	padding: 5px;
	box-shadow: 0 0 5px #555;
	cursor: pointer;
}
#registration-page a {
	color: blue;
}



#registration-page td {vertical-align:middle !important;}

#registration-page p{
	margin-left: 20px !important;
}

/*#registration-page ul {list-style-type:none;}*/

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
