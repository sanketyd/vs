var $j = jQuery.noConflict();
var imageSection = new Array();

function ImageSection()  {
	this.images;
	this.imagesFolderPath;
	this.numOfImages;
	this.imgSectionIndex;
	this.marqueeId;
	this.gridViewId;
	this.listViewImgIndex;
	this.gridViewImgIndex;
	this.isThumbnailExists;
	this.thumbnailPrefix;
	
	
	this.setImages = function(images)  {
						this.images = images;
						this.numOfImages = images.length;
						this.listViewImgIndex = 0;
						this.gridViewImgIndex = 0;
					}
	
	this.setImagesFolderPath = function(path)  {
									this.imagesFolderPath = path;
								}
	
	this.setScrollerIndex = function(imgSectionIndex)  {
								this.imgSectionIndex = imgSectionIndex;
							}
						
	this.setMarqueeId = function(marqueeId)  {
							this.marqueeId = marqueeId;
						}
						
	this.setGridViewId = function(gridViewId)  {
							this.gridViewId = gridViewId;
						}
	
	this.setIsThumbnailExists = function(isThumbnailExists)  {
									this.isThumbnailExists = isThumbnailExists;
								}
								
	this.setThumbnailPrefix = function(thumbnailPrefix)  {
									this.thumbnailPrefix = thumbnailPrefix;
								}
								
	this.insertImgInListView = function()  {
								if(this.listViewImgIndex < this.numOfImages)  {
									var thumbnailImgFile;
									
									if(this.isThumbnailExists)
										thumbnailImgFile = this.thumbnailPrefix + this.images[this.listViewImgIndex];
									else
										thumbnailImgFile = this.images[this.listViewImgIndex];
									
									var htmlStr = "<a href='" + this.imagesFolderPath + this.images[this.listViewImgIndex] + "' rel='lightbox[slideshow" + this.imgSectionIndex + "_list]'><img height='175px' border='0' src='" + this.imagesFolderPath + thumbnailImgFile + "' onload='imageSection[" + this.imgSectionIndex + "].insertImgInListView()' /></a> &nbsp;";
									$j("#" + this.marqueeId).append(htmlStr);
								}
								this.listViewImgIndex++;
							 }
							 
	this.insertImgInGridView = function()  {
								if(this.gridViewImgIndex < this.numOfImages)  {
									var thumbnailImgFile;
									
									if(this.isThumbnailExists)
										thumbnailImgFile = this.thumbnailPrefix + this.images[this.gridViewImgIndex];
									else
										thumbnailImgFile = this.images[this.gridViewImgIndex];
									
									var htmlStr = "<a href='" + this.imagesFolderPath + this.images[this.gridViewImgIndex] + "' rel='lightbox[slideshow" + this.imgSectionIndex + "_grid]'><img width='210px' border='0' src='" + this.imagesFolderPath + thumbnailImgFile + "' onload='imageSection[" + this.imgSectionIndex + "].insertImgInGridView()' /></a> &nbsp;";
									$j("#" + this.gridViewId).append(htmlStr);
								}
								this.gridViewImgIndex++;
							 }
							 
	this.switchToListView = function()  {
								$j("#" + this.marqueeId).show();
								$j("#" + this.gridViewId).hide();
								$j("#" + this.gridViewId + "_url").show();
								$j("#" + this.marqueeId + "_url").hide();
							 }
						 
	this.switchToGridView = function()  {
								$j("#" + this.gridViewId).show();
								$j("#" + this.marqueeId).hide();
								$j("#" + this.marqueeId + "_url").show();
								$j("#" + this.gridViewId + "_url").hide();
							 }
}