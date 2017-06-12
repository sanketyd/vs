var $j = jQuery.noConflict();

function ImageSlideshow()  {
	this.images;
	this.imagesFolderPath;
	this.imageTagId;
	this.timeInterval;
	this.index;
	
	this.setImages = function(images)  {
						this.images = images;
					}
					
	this.setImagesFolderPath = function(path)  {
									this.imagesFolderPath = path;
								}
	
	this.setImageTagId = function(id)  {
							this.imageTagId = id;
						}
						
	this.setTimeInterval = function(timeInterval)  {
							this.timeInterval = timeInterval;
						}
						
	this.startSlideshow = function()  {
							this.index = 0;
							this.displayImage();
						  }
						  
	this.displayImage = function()  {
							// Display the image
							$j('#' + this.imageTagId).attr('src', this.imagesFolderPath + this.images[this.index]);
							$j('#' + this.imageTagId).animate(
								{opacity: 1}, 300
							);
							
							// Get the index of next image
							this.index++;
							this.index = this.index % this.images.length;
							
							// Set timeout to hide the image
							$j.self1 = this;
							setTimeout(this.hideImage.bind(this), this.timeInterval);
						}
						
	this.hideImage = function()  {
						$j('#' + this.imageTagId).animate(
							{opacity: 0.1}, 
							500,
							function(){
								$j.self1.displayImage();
							}
						);						
					 }
}


function ImageSlideshowWithCaption()  {
	this.images = [];
	this.eventNames = [];
	this.isSingleActivity = false;
	this.eventNameToUrlMapping = new Array();;
	this.imagesFolderPath;
	this.imageTagId;
	this.captionTagId;
	this.timeInterval;
	this.index;
	
	this.setImages = function(images)  {
						this.images = images;
						
					}
	
	this.setActivityName = function(activityName)  {
								this.eventNames[0] = activityName;
								this.isSingleActivity = true;
							}
	
	this.addImagePair = function(image, caption)  {
							this.images.push(image);
							this.eventNames.push(caption);
						}
	
	this.addUrlPair = function(eventName, url)  {
						this.eventNameToUrlMapping[eventName] = url;
					  }
					  
	this.setImagesFolderPath = function(path)  {
									this.imagesFolderPath = path;
								}
	
	this.setImageTagId = function(id)  {
							this.imageTagId = id;
						}
						
	this.setCaptionTagId = function(id)  {
							this.captionTagId = id;
						}
						
	this.setTimeInterval = function(timeInterval)  {
							this.timeInterval = timeInterval;
						}
						
	this.startSlideshow = function()  {
							this.index = 0;
							
							// Calculate the background dimensions for the caption string
							var height = $j('#' + this.captionTagId).outerHeight();
							var imgWidth = $j('#' + this.imageTagId).attr('width');
							height += 23;
							imgWidth -= 30;
							
							// Set the CSS properties of caption background
							$j('#' + this.captionTagId).css('top', '-' + height + 'px');
							$j('#' + this.captionTagId).css('width', imgWidth +'px');
							
							this.displayImage();
						  }
						  
	this.displayImage = function()  {
							// Display the image
							$j('#' + this.imageTagId).attr('src', this.imagesFolderPath + this.images[this.index]);
							$j('#' + this.imageTagId).animate(
								{opacity: 1}, 300
							);
							
							// Build the caption
							var eventName;
							if(this.isSingleActivity)
								eventName = this.eventNames[0];
							else
								eventName = this.eventNames[this.index];
							var caption = "Some pics of <i>" + eventName + "</i> (" + (this.index+1) + "/" +  this.images.length + ")";
							if(this.eventNameToUrlMapping[eventName] != undefined)
								caption += "&nbsp; <a target='_blank' style='color:aqua' href='" + this.eventNameToUrlMapping[eventName] + "'>view more</a>";
							
							
							// Display the caption
							$j('#' + this.captionTagId).html(caption);
							$j('#' + this.captionTagId).animate(
								{opacity: 0.6}, 300
							);
							
							// Get the index of next image
							this.index++;
							this.index = this.index % this.images.length;
							
							// Set timeout to hide the image
							$j.self2 = this;
							setTimeout(this.hideImage.bind(this), this.timeInterval);
						}
						
	this.hideImage = function()  {
						$j('#' + this.imageTagId).animate(
							{opacity: 0.1}, 
							500,
							function(){
								//alert($j.self.timeInterval);
								$j.self2.displayImage();
							}
						);
						$j('#' + this.captionTagId).animate(
							{opacity: 0.1}, 
							500
						);
					 }
}

function QuotationSlideshow()  {
	this.quotations;
	this.quotationTagId;
	this.timeInterval;
	this.index;
	
	this.setQuotations = function(quotations)  {
						this.quotations = quotations;
					}
	
	this.setQuotationTagId = function(id)  {
							this.quotationTagId = id;
						}
						
	this.setTimeInterval = function(timeInterval)  {
							this.timeInterval = timeInterval;
						}
						
	this.startSlideshow = function()  {
							this.index = 0;
							this.displayQuotation();
						  }
						  
	this.displayQuotation = function()  {
							// Display the quotation
							$j('#' + this.quotationTagId).stop(true, true).slideUp();
							$j('#' + this.quotationTagId).html(this.quotations[this.index]);
							$j('#' + this.quotationTagId).fadeIn();
							
							// Get the index of next quotation
							this.index++;
							this.index = this.index % this.quotations.length;
							
							// Set timeout to hide the quotation
							setTimeout(this.displayQuotation.bind(this), this.timeInterval);
						}
}

function highlightUrl(urlId)  {
	$j("#" + urlId).css("color", "aqua");
	$j("#" + urlId).removeAttr("href");
}

function blink_function(elemId)  {
	var elem = $j('#' + elemId);
	
	if (elem.css('visibility') == 'hidden') {
		elem.css('visibility', 'visible');
		setTimeout("blink_function('" + elemId + "')", 2000);
		
	} else {
		elem.css('visibility', 'hidden');
		setTimeout("blink_function('" + elemId + "')", 250);
	}
}