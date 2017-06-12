<script>
$.getJSON( "http://vylc-2014.appspot.com/get_details", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "registration-page" );
});
</script>

<div class="wrapper2">
	  <h2 class = heading>
	 <strong><a href="javascript:window.history.back();"><img src="themes/theme_default/img/primary/arrowleft.png"/></a> Registration</strong> 
	   <hr style="border: 1px solid black"/>
	</h2>
	<div id="registration-page" class="page">
		<h2 style="color:black;">Login with:</h2>
		<table>
			<tr>
				<td style="width:300px"><button onclick="window.location.href='https://vylc-2014.appspot.com/login?provider=Google'"><img src="img/google.png"></button></td>
				<td><button onclick="window.location.href='https://vylc-2014.appspot.com/login?provider=Yahoo'"><img src="img/yahoo.png"></button></td></td>
			</tr>
		</table>
	</div>
</div>