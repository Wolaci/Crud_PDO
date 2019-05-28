<?php 
	include 'conn.php';
	$id = $_GET['id'];

	$edit=$conn->prepare('SELECT * FROM users WHERE id = ?');
	$edit->execute([$id]);
?>
<h1>aaaaaaaaaaa</h1>
<form>
	<label>aaaaa</label>
	<input type="text" name="aa" value="<?=$edit[1]?>">
	<label>aaaaa</label>
	<input type="" name="" value="">
	<input type="" name="" value="">
	<input type="" name="" value="">
	<input type="" name="" value="">
	<input type="" name="" value="">
	<input type="" name="" value="">
</form>