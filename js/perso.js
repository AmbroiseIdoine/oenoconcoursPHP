function sayHello() {
	alert("Hello World")
};

function resizeArea(areaClass, frac){
	try{
		var img = document.getElementById('backgroundImage'); 
		//or however you get a handle to the IMG
		var width = img.clientWidth;
		var height = img.clientHeight;
                $("#navigation").css('height', 0.04*width);
                $(".nav-link").css({
			'padding-left': 0.04*width,
			'padding-right': 0.04*width,
			'padding-bottom': 0.01*width,
			'padding-top': 0.01*width,
			'font-size' : 0.013*width
		});
		$('#nav-link1').css('left', 0*width);
		$('#nav-link2').css('left', 0.1*width);		
		$('#nav-link3').css('left', 0.2*width);
		$('#nav-link4').css('left', 0.33*width);
		$('#nav-link5').css('left', 0.42*width);
		$(".".concat(areaClass)).css('max-height', height*frac);
		$(".text-partenaires").css('max-height', height*frac);
		$(".text-actualites").css('max-height', height*frac);
                $(".text").css({
			'top' : height*(1-frac-0.04)/2,
			'right': height*(1-frac-0.04)/2,
			'padding': height*0.02
		});
		

	}catch(err){}
}

//
//$(document).ready(function() {
//	resizeArea("text-allArticles", 0.84);
//});

window.onload = function() {
    resizeArea("text-allArticles", 0.84);
}

$(window).resize(function(){
	resizeArea("text-allArticles", 0.84);
});
