<style>


.seq {
	margin-top: 40px;
	margin-bottom: 15px;
}
.seq span{
	border-bottom: 2px solid brown;
}

#basic_details label {
margin-left: 0;
}

#registration-page table {
width: 600px;
margin: auto;
border-collapse: collapse;
}

#registration-page tr {
border: 1px solid brown;
}

#registration-page td {
text-align: left;
vertical-align: middle;
padding-top: .5em;
padding-bottom: .5em;
padding-left: 35px;
}

#basic_details input {
width: 360px;
border: 1px solid black;
}

#reg_events td:nth-child(3){
	padding-left: 10px;
	color: brown;
}
</style>
<form action="?/registration" method="POST">

	<div class="seq"><span>Basic Details</span></div>
	<table id="basic_details">
		<col style="width:110px"/>
		<col/>
		<col style="width:490px"/>
		<tr>
			<td><label for="reg_name">Email</label></td>
			<td>:</td>
			<td><?=$details['email']?></td>
		</tr>
		<tr>
			<td><label for="reg_name">Name</label></td>
			<td>:</td>
			<td><input id="reg_name" name="name" value="<?=$details['name']?>"/></td>
		</tr>
		<tr>
			<td><label for="reg_coll_inst">Collage / Institute</label></td>
			<td>:</td>
			<td><input id="reg_coll_inst" name="coll_inst" value="<?=$details['coll_inst']?>"/></td>
		</tr>
		<tr>
			<td><label for="reg_department">Department</label></td>
			<td>:</td>
			<td><input id="reg_department" name='department'  value="<?=$details['department']?>"/></td>
		</tr>
		<tr>
			<td><label for="reg_mobileno">Mobile No.</label></td>
			<td>:</td>
			<td><input id="reg_mobileno" name='mobile_no'  value="<?=$details['mobile_no']?>"/></td>
		</tr>
	</table>

<?php
$participating = array('checked' => 'Participating');
?>

	<div class="seq"><span>Events</span></div>
	<table id="reg_events">
		<col style="width:300px"/>
		<col style="width:50px"/>
		<col style="width:250px"/>
		<tr>
			<td>Quiz</td>
			<td><input type="checkbox" name="quiz" <?=$details['quiz']?>/></td>
			<td><span id="participating_quiz"><?=$participating[$details['quiz']]?></span></td>
		</tr>

		<tr>
			<td>The Youth Leadership Challenge</td>
			<td><input type="checkbox" name="ylc" <?=$details['ylc']?>/></td>
			<td><span id="participating_ylc"><?=$participating[$details['ylc']]?></span></td>
		</tr>

		<tr>
			<td>Social Innovation Challenge</td>
			<td><input type="checkbox" name="sic" <?=$details['sic']?>/></td>
			<td><span id="participating_sic"><?=$participating[$details['sic']]?></span></td>
		</tr>

		<tr>
			<td>Movie Making</td>
			<td><input type="checkbox" name="mm" <?=$details['mm']?>/></td>
			<td><span id="participating_mm"><?=$participating[$details['mm']]?></span></td>
		</tr>

	</table>

	<div style="width:200px; margin:auto; margin-top:20px;">
		<input style="width:90px; background-color: #8b0305; color: #ffd974; border: 1px solid; cursor: pointer;" type="submit" name="submit" value="Update"/>
		<input style="width:90px; background-color: #8b0305; color: #ffd974; border: 1px solid; cursor: pointer;" type="submit" name= "submit" value="Logout"/>
	</div>
</form>

<script>
$("#reg_events input").click(function(){
	if (this.checked) {
		$("#participating_"+this.name).text("Participating");
	}
	else {
		$("#participating_"+this.name).text("");
	}
})
</script>