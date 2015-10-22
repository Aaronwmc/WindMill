<?php

if(is_uploaded_file($_FILES['file1']['tmp_name'])){
	//unlink($_FILES['file1']['tmp_name']);
	move_uploaded_file($_FILES['file1']['tmp_name'], "D:/{$_FILES['file1']['name']}");
}

?>
