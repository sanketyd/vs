
<?php function print_if_provided($parameter){
	if (isset($_POST[$parameter]) && $_POST[$parameter]!='null')
		echo $_POST[$parameter];
}

$event_name = array("Workshop on soft skills", "KBC", "Leadership Summit", "Stage Play", "Creative writing", "Career Counselling", "Essay Writing", "Extempore", "Quiz", "Painting Competition");
?>

<h1>Registration</h1>
<span id="abcdef">
	<div id="connecting">
		Connecting with registration server ... 
	</div>

	<div id="login_with" style="display: none;">
		
		<input type="hidden" name="type" value="individual"/><!--Individual&nbsp;&nbsp; <input type="radio" name="type" value="school" disabled/>School<br/>-->
		<ul style="margin-left: -20px;">
			<li>
				For <b>college events</b>, login with:<br/>
				<br/>
				
				<a href="javascript:login('Google');"><img src="images/Gmail_Logo.png" class="open_logo" style="margin-left: 140px;"></img></a>
				<a href="javascript:login('Yahoo');"><img src="images/Yahoo_Logo.png" class="open_logo" style="margin-left: 10px;"></img></a>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
			</li>
			<li>
				For <b>school events</b>, download the following file, fill the relevant details and email it<br/>
				To: <a href="mailto:vsamiti@iitk.ac.in"><b>vsamiti@iitk.ac.in</b></a>, with<br/>
				Subject: <b>VYC School Name</b><br/>
				To download the file click <a href="http://iitk.ac.in/vs/vyc_2013/docs/VYC_School%20Name.xls">here.</a>
			</li>
		</ul>
		
		
	</div>

	<form name="indivisual_reg" id="indivisual_reg" action="http://vyc2013.appspot.com/update" method="GET" style="display: none;">
		<a href="javascript:logout()" style="float: right; ttext-decoration: none; color:blue; margin-right: 20px;" onMouseOver="this.style.color='#5C8A00'" onMouseOut="this.style.color='#00F'">logout</a>
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
		<b>To register for events: </b> <a href="#/events" class="nav" style = "text-decoration: none; color:blue;" onMouseOver="this.style.color='#5C8A00'" onMouseOut="this.style.color='#00F'">Click here</a> <b>OR</b> go to Events tab.
		You are registered in the following events:<br/>
		<div id="registered_events"></div>
		<div style="text-align: center;">
			<input type="submit" value="Update"/>
		</div>
	</form>
</span>
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

#abcdef {
	margin-left: 20px;
	display: block;
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
