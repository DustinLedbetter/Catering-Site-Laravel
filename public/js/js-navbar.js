// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
	var x = document.getElementById("navSmall");
	if (x.className.indexOf("w3-show") == -1) 
	{
		x.className += " w3-show";
	} 
	else 
	{
		x.className = x.className.replace(" w3-show", "");
	}
}
