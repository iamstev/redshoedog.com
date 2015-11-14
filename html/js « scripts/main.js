// @codekit-prepend "_jquery-1.10.2.js", "_modernizr.js", "_waypoints.min.js", "_respond.src.js";

function contactus(){
	$('body').addClass('stop-scroll');
	document.getElementById('fullscreenload').style.display = 'block';
	$.get(
		"http://redshoedog.com/contact/ajax/contactus/",
		{ firstname: document.getElementById('contact_firstname').value, lastname: document.getElementById('contact_lastname').value, email: document.getElementById('contact_email').value, comment: document.getElementById('contact_comment').value },
		function( data ) {
			if(data.error === '0'){
				document.getElementById('contact_firstname').value = '';
				document.getElementById('contact_lastname').value = '';
				document.getElementById('contact_email').value = '';
				document.getElementById('contact_comment').value = '';
				$('body').removeClass('stop-scroll');
				document.getElementById('fullscreenload').style.display = 'none';
				alert(data.msg);
			}else{
				alert(data.msg);
			}
		},
		"json"
	);
}




function showModal(div, blackoutcolor) {
    "use strict";
    if(blackoutcolor === 'white'){
		document.getElementById('blackout').style.backgroundColor = 'white';
    }
    document.getElementById('blackout').style.display = 'block';
    document.getElementById(div).style.display = 'block';
    $('body').addClass('stop-scroll');
    document.openModal = div;
}
function hideModal(div) {
    "use strict";
    document.getElementById('blackout').style.display = 'none';
    document.getElementById('blackout').style.backgroundColor = 'black';
    document.getElementById(div).style.display = 'none';
    $('body').removeClass('stop-scroll');
    document.openModal = '';
}