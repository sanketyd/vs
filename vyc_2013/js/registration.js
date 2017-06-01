var event_names=["Workshop on Leadership and Soft Skills", "KBC (Kaun Banega Champion)", "Youth Leadership Challenge", "Stage Play", "Creative Writing"];

$.getScript("http://vyc2013.appspot.com/fetch", function() {
	//console.log(data);
	$("#connecting").hide();
	if (data["type"]=="individual"){
		info = data;
		console.log(info["name"]);
		$("#individial_reg_email").text(data["email"]);
		$("#individial_reg_name").val(data["name"]);
		$("#individial_reg_institute").val(data["institute"]);
		$("#individial_reg_department").val(data["department"]);
		$("#individial_reg_mobileno").val(data["mobileno"]);
		$("#indivisual_reg").show();
		event_list=$("<ul/>", {'id': 'registered_events_ul'});
		for (var i=0; i<=4; i++)
			if (data["event_"+i])
				event_list.append($("<li/>").text(event_names[i]));
		$("#registered_events").append(event_list);
		
		console.log($("#YLC").attr('href'));// "&entry_0=something&entry_2=hello&entry_3=anandogc@gmail.com&entry_4=Anando+Gopal%20Chatterjee&entry_23=PHY"
		logged_in=true;
	}
	else if (data["type"]=="school"){
		console.log("sch");
		$("#school_reg").show();
		logged_in=true;
	}
	else {
		$("#login_with").show();
	}
	
}).fail(function(){
	alert("Unable to connect with the registration server, please refresh the page.")
});

function login(op){
	$('<form/>', {
		'id': 'redirect',
		'name': 'redirect',
		'action': 'http://vyc2013.appspot.com/openid',
		'method': 'POST',
		'style': 'display: none'
		}).append($('<input/>', {
			'name': 'op',
			'value': op
			}))
		   .append($('<input/>', {
			'name': 'type',
			'value': $('input:radio[name=type]:checked').val()
			}))
		  .append('<button/>', {
			  'type': 'submit',
			  'value': 'redirect'
			  }).appendTo('body');
			  
	document.getElementById("redirect").submit();
}

function logout(){
	logged_in=false;
	
	$.getScript("http://vyc2013.appspot.com/logout")
		.done(function() {
			$("#indivisual_reg").hide();
			$("#school_reg").hide();
			$("#login_with").show();
		})

}

$("#indivisual_reg").submit(function(event){
	// prevent default posting of form*/
	event.preventDefault();
	// setup some local variables
	var $form = $(this),
	  // let's select and cache all the fields
	  $inputs = $form.find("input, select, button, textarea"),
	  // serialize the data in the form
	  serializedData = $form.serialize();

	var empty_found=false;

	/*$('input.required').each(function(index) {
		if (!empty_found){
			value = $(this).attr('value');
			console.log(value.length);
			if (!value || 0 === value.length){
				alert("Required fields must be provided.");
				empty_found=true;
			}
		}
	});*/

	if (!empty_found){

		// let's disable the inputs for the duration of the ajax request
		$inputs.attr("disabled", "disabled");

		$.getScript("http://vyc2013.appspot.com/update?"+serializedData)
		.done(function(script, textStatus) {
			console.log(script);
			console.log(textStatus );
			$inputs.removeAttr("disabled");
			$disabled_inputs = $form.find("input:checkbox");
			$disabled_inputs.attr("disabled", "disabled");
		})
		.fail(function(jqxhr, settings, exception) {
			console.log( "Triggered ajaxError handler." );
			$inputs.removeAttr("disabled");
			$("input:checkbox").attr("disabled", "disabled");
			$disabled_inputs = $form.find("input:checkbox");
			$disabled_inputs.attr("disabled", "disabled");
			alert("Update failed.")
		});  
	}
});


$("#children_reg").submit(function(event){
	// prevent default posting of form*/
	event.preventDefault();
	// setup some local variables
	var $form = $(this),
	  // let's select and cache all the fields
	$inputs = $form.find("input, select, button, textarea");

	var empty_found=false;

	//~ $('input.required').each(function(index) {
		//~ if (!empty_found){
			//~ value = $(this).attr('value');
			//~ if (!value || 0 === value.length){
				//~ alert("Required fields must be provided.");
				//~ empty_found=true;
			//~ }
		//~ }
	//~ });

	if (!empty_found){

		// let's disable the inputs for the duration of the ajax request
		// serialize the data in the form
		var serializedData = $form.serialize();
		$inputs.attr("disabled", "disabled");

		$.getScript("http://vyc2013.appspot.com/add_school_student?"+serializedData)
		.done(function() {
			console.log(added);
			$inputs.removeAttr("disabled");
			$('#children_reg_table tr:last')
			.before($("<tr/>")
			  .append($("<td/>").text("roll"))
			  .append($("<td/>").text("name"))
			  .append($("<td/>").append($("<input/>", {"type": "checkbox"})))
			  .append($("<td/>").append($("<input/>", {"type": "checkbox"})))
			  .append($("<td/>").append($("<input/>", {"type": "checkbox"})))
			  .append($("<td/>").append($("<input/>", {"type": "checkbox"})))
			  .append($("<td/>").append($("<input/>", {"type": "checkbox"}))));
		})
		.fail(function(jqxhr, settings, exception) {
			$inputs.removeAttr("disabled");
			alert("Add failed.")
		});  
	}
});
