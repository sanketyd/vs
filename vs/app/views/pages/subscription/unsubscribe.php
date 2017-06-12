<?php include (APP_ROOT.'/app/views/base.php'); ?>

<?php startblock('head') ?>
<title>Vivkeananda Samiti | Dectivate</title>
<?php endblock() ?>	

<?php startblock('central_pane') ?>
<h1>Unsubscribe</h1>

<?php
if (isset($_GET['key'])){
	$email_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=getEmail&key='.urlencode($_GET['key']).'&purpose=unsubscribe');

	$email = json_decode($email_str);

	if (json_last_error() == JSON_ERROR_NONE) {
		if ( (isset($email[0])) && ($email[0]==0) ) {
?>
<form id="activation_form" action="?page=subscription/unsubscribe" method="POST">
	<input type="hidden" name="key" value="<?=$_GET['key']?>"/>
	Are you sure you want to remove <?=$email[1]?> from our mailing list. <br/>
	<input type="submit" name="deactivate" value="Yes"/>  
	<input type="submit" name="deactivate" value="No"/>
</form>

<?php
		} else {
			echo $email[1];
		}
	} else {
		echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ".$email_str;
		
	}
} else if (isset($_POST['key'])) {
	if ($_POST['deactivate']=="Yes") {
		$deactivate_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=deactivate&key='.urlencode($_POST['key']));

		$deactivate = json_decode($deactivate_str);

		if ( (json_last_error() == JSON_ERROR_NONE) && (isset($deactivate[1])) ) {
			echo $deactivate[1];
		}
		else {
			echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ";	
		}
	}
	else {
		echo "Your subscription has been retained.";
	}
} else {
		echo "Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ";
}
?>

<?php endblock() ?>
