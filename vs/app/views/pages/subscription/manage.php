<?php include (APP_ROOT.'/app/views/base.php'); ?>

<?php startblock('head') ?>
<title>Vivkeananda Samiti | Manage Subscription</title>
<?php endblock() ?>	

<?php startblock('central_pane') ?>
<h1>Manage Subscription</h1>

<?php

switch ($_POST['subscription']){
	case "subscribe":
		$subscribe_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=subscribe&email='.urlencode($_POST['email']));

		$subscribe = json_decode($subscribe_str);

		if (json_last_error() == JSON_ERROR_NONE) {
			echo $subscribe[1];

		} else {
			echo "Subscribe: Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ".$subscribe_str;
		}
		break;

	case 'modify':
		$modify_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=modify_send_mail&email='.urlencode($_POST['email']));

		$modify = json_decode($modify_str);

		if (json_last_error() == JSON_ERROR_NONE) {
			echo $modify[1];

		} else {
			echo "Modify: Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in " . $modify_str;
		}
		break;

	case 'unsubscribe':
		$unsubscribe_str = get_remote_content('https://script.google.com/macros/s/AKfycbzQJveqgz53U9aiofCZwIUadnZeVTcTAhSreuYbRrGg4pHQksE/exec?action=unsubscribe&email='.urlencode($_POST['email']));

		$unsubscribe = json_decode($unsubscribe_str);

		if (json_last_error() == JSON_ERROR_NONE) {
			echo $unsubscribe[1];

		} else {
			echo "Unsubscribe: Unable to process your request. Please try later. If the problem persists please inform at vsamiti@iitk.ac.in ".$unsubscribe_str;
		}
		break;

	default:
?>
Welcome to <strong>Vivekananda Samiti</strong> mailing list manager.<br/>
<br/>

<form action="?page=subscription/manage" method="POST">
Email: <input name="email" autofocus/>
<input type="hidden" name="subscription" value="subscribe"/>
<input type="submit" name="subscribe" value="Subscribe" /> <br/>
<br/>
<a class="small" href="#" onclick="$(this).prev().prev().prev().prev().attr('value', 'modify'); $(this).closest('form').submit();">Modify</a> | 
<a class="small" href="#" onclick="$(this).prev().prev().prev().prev()
.prev().attr('value', 'unsubscribe'); $(this).closest('form').submit();">Unsubscribe</a>
</form>
<?
}
?>


<?php endblock() ?>