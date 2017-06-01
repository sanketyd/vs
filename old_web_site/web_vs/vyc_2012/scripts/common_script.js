function startVyc2011PicSlideshow()  {
	var images = ['DSC_0165.JPG', 'DSC_0160.JPG', 'DSC_0161.JPG', 'DSC_0172.JPG', 'DSC_0184.JPG', 'DSC_0177.JPG', 'DSC_0179.JPG', 'DSC_0181.JPG', 'DSC_0188.JPG', 'DSC_0192.JPG', 'DSC_0194.JPG', 'DSC_0204.JPG', 'DSC_0211.JPG', 'DSC_0220.JPG', 'DSC_0237.JPG', 'DSC_0241.JPG', 'DSC_0250.JPG', 'DSC_0269.JPG', 'DSC_0282.JPG', 'DSC_0291.JPG', 'DSC_0298.JPG', 'DSC_0303.JPG', 'DSC_0309.JPG'];
	var folderPath = '../vyc_2011/vyc_photos/';
	var imageId = 'imageSlide2';
	var captionId = 'imageSlide2_caption';
	var timeInterval = 3000;


	var imageSlideshow = new ImageSlideshowWithCaption();
	imageSlideshow.setImages(images);
	imageSlideshow.setImagesFolderPath(folderPath);
	imageSlideshow.setActivityName("VYC'11");
	imageSlideshow.addUrlPair("VYC'11", "../gallery_vyc_2011.php");
	imageSlideshow.setImageTagId(imageId);
	imageSlideshow.setCaptionTagId(captionId);
	imageSlideshow.setTimeInterval(timeInterval);
	imageSlideshow.startSlideshow();
}

$j(document).ready(function() {
	setTimeout("startSwamijiPicSlideshow('../images/swamiji_gallery/swami_vivekananda/')", 1);
	setTimeout("startQuotationSlideshow()", 1);
});
