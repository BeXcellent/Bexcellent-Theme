function animateMenu() 
{
	document.getElementById('menuimg').style.display = "none";
	document.getElementById('list').style.display = "block";

	document.getElementById('menu').style.height = "300px";
}

function hideMenu() 
{
	document.getElementById('menuimg').style.display = "block";
	document.getElementById('list').style.display = "none";

	document.getElementById('menu').style.height = "auto";
}