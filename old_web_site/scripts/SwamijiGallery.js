function SwamijiGallery(node, folder_path) {
	
	var quotations = ["See for the highest, aim at that highest, and you shall reach the highest.", 
						"<i>Comfort</i> is no test of truth; on the contrary, truth is often far from being <i>comfortable</i>.", 
						"<b>The earth is enjoyed by heroes</b> - this is the unfailing truth. Be a hero. Always say, <b>I have no fear</b>.", 
						"<b>Face the brutes</b>. That is a lesson for all life-face the terrible, face it boldly.",
						"Things are not bettered, but we are bettered, by making changes in them.",
						"The only test of good things is that they make us strong.",
						"Purity, patience, and perseverance are the three essentials to success, and above all, love.",
						"Strength is in goodness, in purity.",
						"If the whole world stands against you sword in hand, would you still dare to do what you think is right?",
						"Arise! Awake! And stop not till the goal is reached.",
						"To be good and to do good--that is the whole of religion.",
						"Great undertakings are always fraught with many obstacles.",
						"It is better to wear out than rust out.",
						"Hold the ideal a thousand times, and if you fail a thousand times, make the attempt once more.",
						"The history of the world is the history of a few men who had faith in themselves.",
						"We must keep our dignity before others. Unless we do that, we expose ourselves to insult.",
						"When death is certain, it is best to sacrifice oneself for a good cause.",
						"Be an atheist if you want, but do not believe in anything unquestioningly.",
						"Character has to be established through a thousand stumbles.",
						"Don't go down till you are knocked down.",
						"Everything must be sacrificed, if necessary, for that one sentiment: universality.",
						"Experience is the only teacher we have.",
						"Give love, give help, give service, give any little thing you can, but keep out barter.",
						"If superstition enters, the brain is gone.",
						"If the mind is intensely eager, everything can be accomplished-mountains can be crumbled into atoms.",
						"If you really want the good of others, the whole universe may stand against you and cannot hurt you.",
						"Live for an ideal, and leave no place in the mind for anything else.",
						"Strength is life, weakness is death."
					  ];
	
	var image_index=0;
	var quotation_index=0;
	$j(node).css({'position': 'relative', 'top': '-17px'});
	$j.getJSON("subpages/list.php?path="+folder_path, function(images) {
		if (images.length > 1){
			
			//Randomize
			images.sort(function(){return Math.round(Math.random())-0.5});
			quotations.sort(function(){return Math.round(Math.random())-0.5});
			
			$j(node).append('<div id="Swamiji_image" style="height: 365px; position: relative;">\
					<img style="width: 250px; z-index: 1; position: absolute; top: 0; left: 0; border-radius: 10px;" src="'+folder_path+images[image_index++]+'"/>\
					<img style="width: 250px; z-index: 0; position: absolute; top: 0; left: 0; border-radius: 10px;" src="'+folder_path+images[image_index++]+'"/>\
					</div>');
					
					
					
			$j(node).append('<div class="textArea" style="margin-top: 20px; height: 210px;">\
								<div class="panelHeading">Quotations of Swami Vivekananda</div>\
								<div id="Swamiji_quotation" style="height: 365px; width: 250px; position: relative; height: 80px; margin: auto;">\
									<p style="background-color: #e0e0e0; text-align: justify; width: 220px; height: 100px; z-index: 1; position: absolute; top: 0px; left: 0px;  padding: 20px 10px 0 10px;">'+quotations[quotation_index++]+'</p>\
									<p style="background-color: #e0e0e0; text-align: justify; height: 100px; z-index: 0; position: absolute; top: 0px; left: 0px; width: 220px; padding: 20px 10px 0 10px;">'+quotations[quotation_index++]+'</p>\
								</div>\
								<a style="position: absolute; right: 20px; bottom: 5px; color: green;" href="quotations.php"> See more quotatons &raquo;</a>\
							</div>');
			
			console.log($j("#Swamiji_quotation p:first-of-type"));
			 window.setInterval(function(){
				 $j("#Swamiji_image img:first-child").fadeOut(1000, function(){
							$j(this).remove();
							$j("#Swamiji_image img:first-child").css('z-index', 1);
							$j("#Swamiji_image").append('<img style="width: 250px; z-index: 0; position: absolute; top: 0; left: 0; border-radius: 10px;" src="'+folder_path+images[(image_index++)%(images.length)]+'"/>');
					});
					
				

				 $j("#Swamiji_quotation p:first-of-type").fadeOut(1000, function(){
							$j(this).remove();
							$j("#Swamiji_quotation p:first-of-type").css('z-index', 1);
							$j("#Swamiji_quotation").append('<p style="background-color: #e0e0e0; text-align: justify; height: 100px; z-index: 0;  position: absolute; top: 0px; left: 0px; margin: auto; width: 220px; padding: 20px 10px 0 10px;">'+quotations[(quotation_index++) % (quotations.length)]+'</p>');
						});
				 }, 8000);
		}
	});
}
