<select id="select_valores" name="title">
	<option>Escolha a ser apagado</option>	
<?php foreach($variaveis['primeira'] as $v):?>	
	<option value="<?=(string)$v['_id']?>"><?=(string)$v['title']?></option>
<?php endforeach;?>	
</select>
<form method="post">
	<input id="campo_atualiza" name="title" value="" />
	<input type="hidden" id="campo_atualizado" name="id" value="" />
	<input type="submit">
</form>
<?= isset($variaveis['msg']) ? $variaveis['msg'] : '' ?>
<script>
	var v = document.getElementById("select_valores");
	var c = document.getElementById("campo_atualiza");
	var ca = document.getElementById("campo_atualizado");

	select_valores.onchange = function(){
		//seleciona valor do option
		c.value = v.options[v.selectedIndex].text;
		c.setAttribute("value", c.value);
		ca.setAttribute("value", v.value);
	};
</script>