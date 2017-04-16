window.document.onload = function()
{
	var buttons = window.document.getElementsByClassName('nav_bar_button');
	for(var i = 0; i < buttons.length; i++)
	{
		var button = buttons[i];
		button.onclick = function(){
			var pageForm = window.document.createElement("form");
			var path = "./process_nav_button.php";
			pageForm.setAttribute("method", "post");
			pageForm.setAttribute("action" , path);
			var hidden_element = document.createElement("input");
			hidden_element.setAttribute("name", "pageFrom");
			hidden_element.setAttribute("type", "hidden");
			hidden_element.setAttribute("value", button.innerHTML.toLowerCase());
			pageForm.appendChild(hidden_element);
			window.document.body.appendChild(pageForm);
			pageForm.submit();
		}
	}
}
