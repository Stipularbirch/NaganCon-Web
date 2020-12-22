/* Hamburger Menu Icon */
function toggleMenu() {
	var nav = document.getElementById("nav"), name, arr; 	
	name = "clicked";
	arr = nav.className.split(" ");
	
	if ( nav.classList.contains("clicked") ) {
		nav.classList.remove("clicked");
	} else if (arr.indexOf(name) == -1) {
		nav.className +=  name;		
	}
}
