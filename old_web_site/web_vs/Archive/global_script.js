var $j = jQuery.noConflict();

var imgs1 = ['gallery-img12.jpg', 'swami_img1.jpg', 'swami_img2.jpg', 'swami_img3.jpg', 'swami_img5.jpg', 'swami_img6.jpg', 'swami_img7.jpg', 'swami_img8.jpg', 'swami_img9.jpg', 'swami_img10.jpg', 'swami_img11.jpg', 'gallery-img10.jpg', 'gallery-img13.jpg', 'gallery-img14.jpg', 'gallery-img27.jpg', 'gallery-img44.jpg', 'gallery-img9.jpg'];
var count_imgSlider1 = -1;

var imgs2 = ['DSC_0165.JPG', 'DSC_0160.JPG', 'DSC_0161.JPG', 'DSC_0172.JPG', 'DSC_0184.JPG', 'DSC_0177.JPG', 'DSC_0179.JPG', 'DSC_0181.JPG', 'DSC_0188.JPG', 'DSC_0192.JPG', 'DSC_0194.JPG', 'DSC_0204.JPG', 'DSC_0211.JPG', 'DSC_0220.JPG', 'DSC_0237.JPG', 'DSC_0241.JPG', 'DSC_0250.JPG', 'DSC_0269.JPG', 'DSC_0282.JPG', 'DSC_0291.JPG', 'DSC_0298.JPG', 'DSC_0303.JPG', 'DSC_0309.JPG', 'vyc-poster.jpg', 'vyc-competition.jpg'];
var count_imgSlider2 = -1;

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
var count_quotations = -1;


function imageSlider1(prependString)  {
	// Get the index of next image
	count_imgSlider1++;
	var numOfImages = imgs1.length;
	count_imgSlider1 = count_imgSlider1 % numOfImages;
	
	// Display the next image
	$j('#imageSlide1').attr('src', prependString + imgs1[count_imgSlider1]);
	$j('#imageSlide1').animate(
		{opacity: 1}, 300
	);	
		
	// Set timeout to display next image
	setTimeout("animationCompleted('" + prependString + "')", 5000);
}

function animationCompleted(prependString)  {
	$j('#imageSlide1').data("prependString", prependString);
	
	$j('#imageSlide1').animate(
		{opacity: 0.1}, 
		500,
		function(){
			imageSlider1($j('#imageSlide1').data('prependString'));
		}
	);
}



function imageSlider2(prependString)  {
	// Get the index of next image
	count_imgSlider2++;
	var numOfImages = imgs2.length;
	count_imgSlider2 = count_imgSlider2 % numOfImages;
	
	// Display the next image
	$j('#imageSlide2').attr('src', prependString + imgs2[count_imgSlider2]);
	$j('#imageSlide2').show();
	
	// Build the caption string
	$j('#imageSlide2_caption').html('VYC \'11 pics (' + (count_imgSlider2+1) + '/' + numOfImages + ')' + " <a style='color:aqua' href='http://www.iitk.ac.in/gymkhana/vivekananda_samiti/vyc_2011_gallery.php'>view more</a>");
	
	// Calculate the background dimensions for the caption string
	var height = $j('#imageSlide2_caption').outerHeight();
	var imgWidth = $j('#imageSlide2').attr('width');
	height += 5;
	imgWidth -= 30;
	
	// Set the CSS properties of caption background
	$j('#imageSlide2_caption').css('top', '-' + height + 'px');
	$j('#imageSlide2_caption').css('width', imgWidth+'px');
	$j('#imageSlide2_caption').show();
	
	// Set timeout to display next image
	setTimeout("imageSlider2('" + prependString + "')", 3000);
}

function quotationSlider()  {
	count_quotations++;
	var numOfQuotations = quotations.length;
	count_quotations = count_quotations % numOfQuotations;
	
	$j('#quotation').slideUp();
	$j('#quotation').html(quotations[count_quotations]);
	$j('#quotation').fadeIn();
	setTimeout(quotationSlider, 5000);
}

$j(document).ready(function() {
	setTimeout("imageSlider1('images/swamiji_gallery/swami_vivekananda/')", 1);
	setTimeout(imageSlider2('vyc_2011/vyc_photos/'), 1);
	setTimeout(quotationSlider, 1);
});

function highlightUrl(urlId)  {
	$j("#" + urlId).css("color", "aqua");
	$j("#" + urlId).removeAttr("href");
}