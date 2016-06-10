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
