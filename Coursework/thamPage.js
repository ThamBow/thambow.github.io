// JavaScript Document
window.onload = function() {
	
	var topBanner =  document.getElementById('top-curtain');
	topBanner.align = 'center';
	topBanner.style.background = 'brown';
	topBanner.style.padding = '10px';
	topBanner.style.color = 'white';
	topBanner.style.borderTopLeftRadius = '10px';
	topBanner.style.borderTopRightRadius = '10px';
	topBanner.style.boxShadow = '8px 8px 2px grey';
	
	var contactBit =  document.getElementById('contact');
	contactBit.style.textAlign = 'right';

	
	var vertBanner =  document.getElementById('vert_list');
	var horiBanner =  document.getElementById('hori_list');
	var phpBanner =  document.getElementById('php_stuff');
	var javaBanner =  document.getElementById('java_stuff');
	
	var clickPage = document.getElementById('linkSection');
	clickPage.style.margin = '20px auto 20px auto';
	clickPage.style.textAlign = 'center';
	clickPage.style.backgroundColor = 'brown';
	clickPage.style.padding = '10px';
	clickPage.style.boxShadow = '8px 8px 2px grey';
	
	clickPage.appendChild(vertBanner);
	clickPage.appendChild(horiBanner);
	clickPage.appendChild(phpBanner);
	clickPage.appendChild(javaBanner);
	
	var ahrefPage = document.getElementsByTagName("a");
	var i;
    for (i = 0; i < ahrefPage.length; i++) {
    ahrefPage[i].style.color = 'white';
	ahrefPage[i].style.textDecoration = 'none';
    }

	var footerPage = document.getElementById('footepara');
	footerPage.style.backgroundColor = 'brown';
	footerPage.style.padding = '30px';
	footerPage.style.textAlign = 'right';
	footerPage.style.color = 'white';
	footerPage.style.borderBottomLeftRadius = '10px';
	footerPage.style.borderBottomRightRadius = '10px';
	footerPage.style.boxShadow = '8px 8px 2px grey';
	
	
	
	var thamWrap = document.getElementById('pageWrap');//Add pageholder
		thamWrap.style.width = '60%';
		thamWrap.style.margin = '50px auto auto auto';
		thamWrap.appendChild(top-curtain);
		thamWrap.appendChild(clickPage);
		document.body.appendChild(thamWrap); 
	
	}

