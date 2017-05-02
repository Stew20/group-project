function nav_button_clicked(obj){
			var pageForm = window.document.createElement("form");
			var path = "../process_nav_button.php";
			pageForm.setAttribute("method", "post");
			pageForm.setAttribute("action" , path);
			var hidden_element = document.createElement("input");
			hidden_element.setAttribute("name", "pageTo");
			hidden_element.setAttribute("type", "text");
			hidden_element.setAttribute("value", obj.id.toLowerCase());
			pageForm.appendChild(hidden_element);
			
			var hidden_element2 = document.createElement("input");
			hidden_element2.setAttribute("name", "sqlEntry");
			hidden_element2.setAttribute("type", "text");
			hidden_element2.setAttribute("value", obj.getAttribute("sqlid").toLowerCase());
			pageForm.appendChild(hidden_element2);
			
			window.document.body.appendChild(pageForm);
			pageForm.submit();
		}
