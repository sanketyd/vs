<?php require_once APP_ROOT.'/lib/phpti/ti.php' ?>
<?php require_once APP_ROOT.'/lib/resource.php' ?>
<? $sub_menu_html=""; ?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			#header_table {
				background-color: white;
			}
			#emp {
				height: 5px;
			}
		</style>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script src="<?php load_res('scripts/lib/jquery/jquery.js');?>"></script>

		<?php startblock('head') ?>
		<title> Vivenananda Samiti - IIT Kanpur</title>
		<?php endblock() ?>

		<?// if (!(isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], APP_URL.'?')>-1)) { //Count only when comming first time or comming from a link in some other website.?>
			<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-36231409-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script');
					ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(ga, s);
				})();
			</script>
		<? //} ?>
	</head>
<body>
	<div id="container">
		<table id="header_table">
			<tr>
				<td>
					<h1 style="margin-top: 0;">
						<!--#2f3a5b-->
						<a href="<?php echo APP_URL;?>" style="color: #2f3a5b; text-decoration: none; font-size: 1.2em;">VIVEKANANDA SAMITI </a>  <a href="http://www.iitk.ac.in" style="color: #205893; font-size: 10pt; font-size: .8em; text-decoration: none;"> IIT Kanpur</a> <br/>
					</h1>
				</td>
				<td style="text-align: right;">
					<?php $sub_menu_id=0;
					foreach (array_reverse($menu) as $menu_key => $menu_value){
						if (is_string($menu_value)){
							if (strpos($menu_value, "http")===false){?>
								<a href="<?php echo $menu_value; ?>"class="menu"><?php echo htmlentities($menu_key); ?></a>
						<?	}else{ ?>
								<a target="_blank" href="<?php echo $menu_value; ?>"class="menu"><?php echo htmlentities($menu_key); ?></a>
					<?php		}
						}
						elseif (is_array($menu_value)) {?>
							<a target='sub_menu_<?php echo $sub_menu_id; ?>' class="menu has_sub_menu"><?php echo htmlentities($menu_key); ?></a>
						<?php
							$sub_menu_html .="<div id='sub_menu_".$sub_menu_id++."' class='sub_menu'>";
							foreach ($menu_value as $sub_menu_key => $sub_menu_value){
								if (strpos($sub_menu_value, "http")===false)
									$sub_menu_html .= "<a class='sub_menu_entry' href='".$sub_menu_value."'>".htmlentities($sub_menu_key)."</a>";
								else
									$sub_menu_html .= "<a target='_blank' class='sub_menu_entry' href='".$sub_menu_value."'>".htmlentities($sub_menu_key)."</a>";
							}
							$sub_menu_html.="</div>";
						}
					} ?>
				</td>
			</tr>
		</table>
		<div id="emp">

		</div>
		<table id="main_table">
			<col style="width: 250px"/>
			<col style="min-width: 500px"/>
			<col style="width: 280px; "/>
			<tr>
				<td>
					<div  id="left_pane">
						<?php startblock('left_pane') ?>
						<?php endblock() ?>
					</div>
				</td>
				<td>
					<div id="central_pane">
						<?php startblock('central_pane') ?>
						<?php endblock() ?>
					</div>
				</td>
				<td>
					<div  id="right_pane">
						<?php startblock('right_pane') ?>
							<?php startblock('gallery') ?>
								<div class="block gallery">
									 <div class="FBPage" page="vsiitk" exception="343067102424001">
										<table>
											<tr>
												  <td>
													    Loading...
												  </td>
											</tr>
										</table>
									</div>
									<div class="caption">Gallery</div>
								</div>
							<?php endblock() ?>
							<?php startblock('right_pane_additions') ?>
							<?php endblock() ?>
							<div id="announcements" class="block">
								<div class="title">Announcements</div>
								<p>
											    <ul>

													<?php for ($i=0; $i < count($announcements); $i++){ ?>
														  <li>
															    <a href="<?php echo $announcements[$i]['url']; ?>"><b><?php echo $announcements[$i]['heading']; ?><br/></b></a><?php echo $announcements[$i]['description']; ?>
														  </li>
													<?php } ?>
											    </ul>
								</p>
							</div>
						<?php endblock() ?>
					</div>
				</td>
			</tr>
		</table>

		<div id="footer">
			<a href="?page=home">Home</a>
			<a href="?page=activities/2013/list">Activities</a>
			<a href="?page=quotations">Quotations</a>
			<a target="_blank" href="https://www.facebook.com/pg/vsiitk/photos/?tab=albums">Gallery</a>
			<a href="?page=contact_us">Contact us</a>
			<div id="join-us">
				<a href="#">Join us:</a>
				<a title="Manage your subscription to our mailing list." href="?page=subscription/manage"><img src="<?php load_res('styles/images/Social-Icons-Sketch-Black/Social-Icons-Black-32px/Email_32px.png'); ?>"/></a>
				<a title="Like the facebook page and get notifications about all our activities." target="_blank" href="https://www.facebook.com/vsiitk"><img src="<?php load_res('styles/images/Social-Icons-Sketch-Black/Social-Icons-Black-32px/Facebook_32px.png'); ?>"/></a>
				<a title="Subscribe our youtube channel and get video of talks we organize." target="_blank" href="http://www.youtube.com/vsiitk"><img src="<?php load_res('styles/images/Social-Icons-Sketch-Black/Social-Icons-Black-32px/Youtube_32px.png'); ?>"/></a>
                                <a title="Join us on Linkedin" target="_blank" href="http://in.linkedin.com/in/vivekananda-samiti-342902105"><img src="<?php load_res('styles/images/Social-Icons-Sketch-Black/Social-Icons-Black-32px/Linkedin_32px.png'); ?>"/></a>
                                <a title="Follow us on Twitter" target="_blank" href="http://twitter.com/vsiitk"><img src="<?php load_res('styles/images/Social-Icons-Sketch-Black/Social-Icons-Black-32px/Twitter_32px.png'); ?>"/></a>
			</div>
		</div>
	</div>

	<table id="popup">
		<tr>
			<td id="popup_contents">
				<iframe style="border: 1px solid black;" src="https://docs.google.com/spreadsheet/embeddedform?formkey=dC1naFhHeFhXcjJ1ZDZEM2xaaFFLTVE6MQ" width="760" height="582" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
			</td>
		</tr>
	</table>

	<? echo $sub_menu_html; ?>

	<link rel="stylesheet" type="text/css" href="<?php load_res('styles/base.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php load_res('styles/fbslide.css');?>"/>

	<!-- <div id="back_to_top"><a href="javascript:window.scrollTo(0,0);">Back to top</a></div> -->

	<?php startblock('tail') ?>
	<?php endblock() ?>

        <script type="text/javascript" language="javascript" src="<?php load_res('scripts/lib/jquery/jquery.dotdotdot-packed.js');?>"></script>
	<script src="<?php load_res('scripts/fbslide.js');?>"></script>
	<script src="<?php load_res('scripts/SVGallery.js');?>"></script>
	<script src="<?php load_res('scripts/menu.js');?>"></script>
	<script src="<?php load_res('scripts/base.js');?>"></script>
</body>
</html>
