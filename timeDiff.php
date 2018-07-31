<?php
$ogDate = new DateTime('2018-02-20');
$newDate = new DateTime();
$interval = $ogDate->diff($newDate);
echo $interval->format('%R%a days');
?>
