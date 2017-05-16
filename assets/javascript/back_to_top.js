// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	var btn = window.document.getElementById("myBtn");
	if( typeof btn === "undefined")
	{
		// intentionally left blank
	}
	else
	{
    		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        		document.getElementById("myBtn").style.display = "block";
			} else {
       			document.getElementById("myBtn").style.display = "none";
    		}		
	}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    		document.body.scrollTop = 0;
    		document.documentElement.scrollTop = 0;
}