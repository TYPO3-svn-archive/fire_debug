<?php
if (count($errors))
{

    foreach ($errors as $index => $error) {
    	
    	$error->dump();
    }
}
?>
