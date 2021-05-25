jQuery(function($){
    //Search form display
    $('#searchButton').click(function(){
		$("#searchButton").css({"display": "none", "visibility": "hidden"});
		$("#teleponeNum").css({"display": "none", "visibility": "hidden"});
		$("#ctaButton").css({"display": "none", "visibility": "hidden"});
		$("#searchBoxWrap").css({"display": "block", "visibility": "visible"});
 	});
	$('#searchBoxReturn').click(function(){
		$("#searchButton").css({"display": "block", "visibility": "visible"});
		$("#teleponeNum").css({"display": "block", "visibility": "visible"});
		$("#ctaButton").css({"display": "block", "visibility": "visible"});
		$("#searchBoxWrap").css({"display": "none", "visibility": "hidden"});
	});
	// Homepage feature animation
	$( "#featureImage" ).fadeIn( "slow", function() {
		$( "#featureTxtSection" ).fadeIn( "slow", function() {
			$( "#featureDisplaySection2" ).fadeIn( "slow", function() {
				$( "#featureDisplaySection" ).fadeIn( "slow", function() {
					$( "#featureImage2" ).fadeIn( "slow", function() {
					});
				});
			});
		});
  	});
	//Mobile Nav
	var mobNavStaus = false;
	$('.navbar-toggler').click(function() {
			$("#searchBoxWrap").css({"display": "none", "visibility": "hidden"});
    	if(mobNavStaus == true){
			$(".navbar-toggler-icon").css("background-image", "url('https://soleo.digital-architect.co.uk/soleo/wp-content/themes/soleo/images/hamburger.png')");
			$("#header").css("height", 'auto');
			$("html").css("overflow", 'auto');
			$("body").css("overflow", 'auto');
			$("#teleponeNum").css({"display": "block", "visibility": "visible"});
			$("#ctaButton").css({"display": "block", "visibility": "visible"});
			$("#searchButton").css({"display": "block", "visibility": "visible"});
			mobNavStaus = false;
		}else{
			height = $( document ).height()+'px';
			$(".navbar-toggler-icon").css("background-image", "url('https://soleo.digital-architect.co.uk/soleo/wp-content/themes/soleo/images/close.png')");
			$("#header").css("height", height);
			$("html").css("overflow", 'hidden');
			$("body").css("overflow", 'hidden');
			$("#teleponeNum").css({"display": "none", "visibility": "hidden"});
			$("#ctaButton").css({"display": "none", "visibility": "hidden"});
			$("#searchButton").css({"display": "none", "visibility": "hidden"});
			mobNavStaus = true;
		}
		
		
  	});
});