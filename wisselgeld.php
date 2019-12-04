<?php
$geld = $argv[1];
$wissel = intval($geld);
if(!$wissel == 0) {
echo intval($geld);
echo " keer 1 euro";
exit;
} else {
exit("Je krijgt geen wisselgeld terug");
}
