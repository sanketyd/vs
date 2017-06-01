<?php include (APP_ROOT.'/app/views/base.php'); ?>

<?php startblock('head') ?>
<title>Vivkeananda Samiti | Activate</title>
<?php endblock() ?>	

<?php startblock('central_pane') ?>
<h1>Details</h1>

<?php
if (isset($_GET['key'])){
	$email_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=getEmail&key='.urlencode($_GET['key']).'&purpose=subscribe');

	$email = json_decode($email_str);

	if (json_last_error() == JSON_ERROR_NONE) {
		if ( (isset($email[0])) && ($email[0]==0) ) {
?>
<form id="activation_form" action="?page=subscription/subscribe" method="POST">
	<input type="hidden" name="key" value="<?=$_GET['key']?>"/>
	<table>
		<tr>
			<td style="height: 1.8em;">Email</td><td>:</td><td><?=$email[1]?></td>
		</tr>
		<tr>
			<td><span class="required">Name</span></td><td>:</td><td><input id="name" name="name" class="wide_input" autofocus/></td>
		</tr>
		<tr>
			<td>Contact no.</td><td>:</td><td><input name="contact" class="wide_input"/></td>
		</tr>
		<tr>
			<td>Program(Department)</td><td>:</td><td><input name="program" class="wide_input"/></td>
		</tr>
		<tr>
			<td>Institute</td><td>:</td><td><input name="institute" class="wide_input"/></td>
		</tr>
		<tr>
			<td>Address</td><td>:</td><td><input name="address" class="wide_input"/></td>
		</tr>
		<tr>
			<td style="height: 1.2em;"></td><td></td><td></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: right"><input type="submit" value="Submit"/></td><td></td><td></td>
		</tr>
	</table>

</form>

<script>
$("#activation_form").submit(function() {
	if ($("input[name='name']").val().length == 0){
		alert("Please fill up your name.");
		$("input[name='name']").focus();
		return false;
	}
});
</script>
<?php
		} else {
			echo $email[1];
		}
	} else {
		echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ";
		
	}
} else if (isset($_POST['key'])) {
	if (strlen($_POST['name'])==0){
		echo "Name cannot be empty. Please go back and fill the form again.";
	}

	else {
		$activate_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=activate&key='.urlencode($_POST['key']).'&name='.urlencode($_POST['name']).'&contact='.urlencode($_POST['contact']).'&program='.urlencode($_POST['program']).'&institute='.urlencode($_POST['institute']).'&address='.urlencode($_POST['address']));

		$activate = json_decode($activate_str);

		if ( (json_last_error() == JSON_ERROR_NONE) && (isset($activate[1])) ) {
			echo $activate[1];
		}
		else {
			echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ";	
		}
	}
} else {
		echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ";
}
?>

<?php endblock() ?>
