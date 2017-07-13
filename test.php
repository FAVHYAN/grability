<?php

require('GetModel.php');

$name = new GetModel('1','thor');

echo '<h1>'.$name->getName().'</h1>';
?>