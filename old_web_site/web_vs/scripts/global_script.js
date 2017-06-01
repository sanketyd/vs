function startSwamijiPicSlideshow(folder_path)  {
	var images = ['gallery-img12.jpg', 'swami_img1.jpg', 'swami_img2.jpg', 'swami_img3.jpg', 'swami_img5.jpg', 'swami_img6.jpg', 'swami_img7.jpg', 'swami_img8.jpg', 'swami_img9.jpg', 'swami_img10.jpg', 'swami_img11.jpg', 'gallery-img10.jpg', 'gallery-img13.jpg', 'gallery-img14.jpg', 'gallery-img27.jpg', 'gallery-img44.jpg', 'gallery-img9.jpg'];
	var folderPath = folder_path;
	var imageId = 'imageSlide1';
	var timeInterval = 5000;
	
	var imageSlideshow = new ImageSlideshow();
	imageSlideshow.setImages(images);
	imageSlideshow.setImagesFolderPath(folderPath);
	imageSlideshow.setImageTagId(imageId);
	imageSlideshow.setTimeInterval(timeInterval);
	imageSlideshow.startSlideshow();
}

function startSamitiPicSlideshow()  {
	var imageSlideshow = new ImageSlideshowWithCaption();
	var folderPath = '';
	var imageId = 'imageSlide2';
	var captionId = 'imageSlide2_caption';
	var timeInterval = 3000;
	
	// Add pics and captions
	imageSlideshow.addImagePair("images/samiti_class/IMG_6496.JPG", "Samiti group");
	imageSlideshow.addImagePair("images/samiti_class/IMG_6498.JPG", "Samiti group");
	imageSlideshow.addImagePair("images/samiti_class/IMG_6487.JPG", "Samiti group");
	
	imageSlideshow.addImagePair("images/medical_camp_2011/IMG_2299.JPG", "Medical camp");
	//imageSlideshow.addImagePair("images/medical_camp_2011/IMG_2309.JPG", "Medical camp");
	imageSlideshow.addImagePair("images/medical_camp_2011/IMG_2328.JPG", "Medical camp");
	imageSlideshow.addImagePair("images/medical_camp_2011/IMG_2354.JPG", "Medical camp");
	
	imageSlideshow.addImagePair("images/temple_tour/IMG_0109.JPG", "Temple tour");
	imageSlideshow.addImagePair("images/temple_tour/IMG_6300.JPG", "Temple tour");
	imageSlideshow.addImagePair("images/temple_tour/IMG_0144.JPG", "Temple tour");
	
	imageSlideshow.addImagePair("images/pd_workshop/IMG_6408.JPG", "PD workshop");
	imageSlideshow.addImagePair("images/pd_workshop/IMG_6412.JPG", "PD workshop");
	imageSlideshow.addImagePair("images/pd_workshop/IMG_6420.JPG", "PD workshop");
	imageSlideshow.addImagePair("images/pd_workshop/IMG_6439.JPG", "PD workshop");
	imageSlideshow.addImagePair("images/pd_workshop/IMG_6461.JPG", "PD workshop");
	
	imageSlideshow.addImagePair("images/book_exhibition/IMG_2367.JPG", "Book exhibition");
	imageSlideshow.addImagePair("images/book_exhibition/IMG_2377.JPG", "Book exhibition");
	imageSlideshow.addImagePair("images/book_exhibition/IMG_6395.JPG", "Book exhibition");
	
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0165.JPG", "VYC'11");
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0179.JPG", "VYC'11");
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0194.JPG", "VYC'11");
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0211.JPG", "VYC'11");
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0241.JPG", "VYC'11");
	imageSlideshow.addImagePair("vyc_2011/vyc_photos/DSC_0282.JPG", "VYC'11");
	
	imageSlideshow.addImagePair("images/samiti_class/IMG_0077.JPG", "Vedanta class");
	imageSlideshow.addImagePair("images/samiti_class/IMG_0078.JPG", "Vedanta class");
	imageSlideshow.addImagePair("images/samiti_class/IMG_0080.JPG", "Vedanta class");
	
	imageSlideshow.addImagePair("images/august_convention/DSC03997.JPG", "August convention");
	imageSlideshow.addImagePair("images/august_convention/DSC04000.JPG", "August convention");
	imageSlideshow.addImagePair("images/august_convention/DSC04010.JPG", "August convention");
	
	imageSlideshow.addImagePair("images/srikantanandaji_talk/IMG_5782.JPG", "Swamiji talk");
	imageSlideshow.addImagePair("images/srikantanandaji_talk/IMG_5789.JPG", "Swamiji talk");
	
	// Map Captions to Gallery URL
	imageSlideshow.addUrlPair("Samiti group", "gallery_samiti.php");
	imageSlideshow.addUrlPair("Medical camp", "gallery_medical_camp.php");
	imageSlideshow.addUrlPair("Temple tour", "gallery_temple_tour.php");
	imageSlideshow.addUrlPair("PD workshop", "gallery_pd_workshop.php");
	imageSlideshow.addUrlPair("Book exhibition", "gallery_book_exhibition.php");
	imageSlideshow.addUrlPair("VYC'11", "gallery_vyc_2011.php");
	imageSlideshow.addUrlPair("Vedanta class", "gallery_samiti.php");
	imageSlideshow.addUrlPair("August convention", "gallery_august_convention.php");
	imageSlideshow.addUrlPair("Swamiji talk", "gallery_srikantanandaji_talk.php");
	
	
	imageSlideshow.setImagesFolderPath(folderPath);
	imageSlideshow.setImageTagId(imageId);
	imageSlideshow.setCaptionTagId(captionId);
	imageSlideshow.setTimeInterval(timeInterval);
	imageSlideshow.startSlideshow();
}

function startQuotationSlideshow()  {
	var quotations = ["See for the highest, aim at that highest, and you shall reach the highest.", 
						"<i>Comfort</i> is no test of truth; on the contrary, truth is often far from being <i>comfortable</i>.", 
						"<b>The earth is enjoyed by heroes</b> - this is the unfailing truth. Be a hero. Always say, <b>I have no fear</b>.", 
						"<b>Face the brutes</b>. That is a lesson for all life-face the terrible, face it boldly.",
						"Things are not bettered, but we are bettered, by making changes in them.",
						"The only test of good things is that they make us strong.",
						"Purity, patience, and perseverance are the three essentials to success, and above all, love.",
						"Strength is in goodness, in purity.",
						"Practical patriotism means not a mere sentiment or even emotion of love of the motherland but a passion to serve our fellow-countrymen.",
						"Stand up, be bold, be strong. Take the whole responsibility on your own shoulders, and know that you are the creator of your own destiny.",
						"If the whole world stands against you sword in hand, would you still dare to do what you think is right?",
						"Arise! Awake! And stop not till the goal is reached.",
						"To be good and to do good--that is the whole of religion.",
						"Great undertakings are always fraught with many obstacles.",
						"It is better to wear out than rust out.",
						"Hold the ideal a thousand times, and if you fail a thousand times, make the attempt once more.",
						"The history of the world is the history of a few men who had faith in themselves.",
						"We must keep our dignity before others. Unless we do that, we expose ourselves to insult.",
						"Man is not travelling from error to truth, but climbing up from truth to truth, from truth that is lower to truth that is higher.",
						"When death is certain, it is best to sacrifice oneself for a good cause.",
						"Be an atheist if you want, but do not believe in anything unquestioningly.",
						"Character has to be established through a thousand stumbles.",
						"Don't go down till you are knocked down.",
						"Everything must be sacrificed, if necessary, for that one sentiment: universality.",
						"Experience is the only teacher we have.",
						"Fear is death, fear is sin, fear is hell, fear is unrighteousness, fear is wrong life. All the negative thoughts and ideas that are in the world have proceeded from this evil spirit of fear.",
						"Give love, give help, give service, give any little thing you can, but keep out barter.",
						"If a person who lives in God becomes miserable, what is the use of living in God? What is the use of such a God? Throw such a God overboard into the Pacific Ocean. We do not want such a God!",
						"If superstition enters, the brain is gone.",
						"If the mind is intensely eager, everything can be accomplished-mountains can be crumbled into atoms.",
						"If you really want the good of others, the whole universe may stand against you and cannot hurt you.",
						"Live for an ideal, and leave no place in the mind for anything else.",
						"May I be born again and again, and suffer thousands of miseries so that I may worship the only God that exists, the only God I believe in, the sum total of all souls--and, above all, my God the wicked, my God the miserable, my God the poor of all races, of all species, is the special object of my worship.",
						"Neither seek nor avoid; take what comes. It is liberty to be affected by nothing. Do not merely endure; be unattached.",
						"So long as millions live in hunger and ignorance, I hold every person a traitor who, having been educated at their expense, pays not the least heed to them.",
						"Stand up, be bold, be strong. Take the whole responsibility on your own shoulders, and know that you are the creator of your own destiny.",
						"Strength is life, weakness is death.",
						"Take up one idea. Make that one idea your life-think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success, and this is the way great spiritual giants are produced. Others are mere talking machines."
					  ];
	var quotationId = 'quotation';
	var timeInterval = 5000;
	
	var quotationSlideshow = new QuotationSlideshow();
	quotationSlideshow.setQuotations(quotations);
	quotationSlideshow.setQuotationTagId(quotationId);
	quotationSlideshow.setTimeInterval(timeInterval);
	quotationSlideshow.startSlideshow();
}
