window.addEventListener('load', alteraCampos, false );
function alteraCampos(){	
	var v = document.getElementById("select_valores");
	var c = document.getElementById("campo_atualiza");
	var ca = document.getElementById("campo_atualizado");

	select_valores.onchange = function(){
		//seleciona valor do option
		c.value = v.options[v.selectedIndex].text;
		c.setAttribute("value", c.value);
		ca.setAttribute("value", v.value);
	};
}	