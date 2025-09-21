<?php
require 'classAutoLoad.php';
$layout = new layouts();
$layout   = new layouts();
$objForms = new forms();
$objFncs  = new fncs();

$layout ->header($conf);
$layout ->navbar($conf);
$layout ->banner($conf);
$layout ->form_frame($conf, $objForms, $objFncs);
$layout ->footer($conf);

?>