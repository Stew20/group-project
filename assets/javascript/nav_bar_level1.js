function nav_button_clicked(){
			var pageForm = window.document.createElement("form");
			var path = "./process_nav_button.php";
			pageForm.setAttribute("method", "post");
			pageForm.setAttribute("action" , path);
			var hidden_element = document.createElement("input");
			hidden_element.setAttribute("name", "pageTo");
			hidden_element.setAttribute("type", "text");
			hidden_element.setAttribute("value", this.id.toLowerCase());
			pageForm.appendChild(hidden_element);
			window.document.body.appendChild(pageForm);
			pageForm.submit();
		}
