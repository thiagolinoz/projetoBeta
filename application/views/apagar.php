<form method="POST">
<select name="title">
<option>Escolha a ser apagado</option>	
<?php
	foreach($variaveis['primeira'] as $v){
		echo "<option value=".(string)$v['_id'].">".$v['title']."</option>";
	}
?>
</select>
<input type="submit">
</form>
<?= isset($variaveis['msg']) ? $variaveis['msg'] : '' ?>