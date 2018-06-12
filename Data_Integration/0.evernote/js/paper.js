var dimensions = 1.414285714285714;
var paperSize = 0;

function setPaperSize() {
	paperSize = $(".page").width() * dimensions;
	resetSize();
}

function resetSize() {
	$(".page").each(function(index, element){
		let page = $(this);
		let content = page.find(".page-content");

		if ( $(window).width() < 920 ) {
			page.css("height", "auto");
		} else {
			page.css("height", paperSize);
		}
	});
}

setPaperSize();

$(window).resize(function(){
	setPaperSize();
});