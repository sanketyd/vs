<?php include (APP_ROOT.'/app/views/base.php'); ?>

<?php startblock('head') ?>
<title>Activity</title>
<?php endblock() ?>	

<?php startblock('central_pane') ?>
   <table style="width:100%">
	<tr>
		<td style="padding-right: 10px;">
<? startblock('activities'); ?>
<? endblock() ?>
		</td>
		<td style="width: 50px;">
			<a href="?page=activities/2017/list">2017</a><br/>
			<a href="?page=activities/2016/2016act">2016</a><br/>
			<a href="?page=activities/2015/list">2015</a><br/>
			<a href="?page=activities/2013/list">2013</a><br/>
			<a href="?page=activities/2012/list">2012</a><br/>
			<a href="?page=activities/2011/list">2011</a><br/>
			<a href="?page=activities/2010/list">2010</a><br/>
		</td>
	</tr>
   </table>
<?php endblock() ?>

<?php startblock('gallery') ?>
	<div class="block gallery">
		 <div class="FBAlbum" albums="422630344467676">
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
