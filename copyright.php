<?php
$startYear = 2015;
$thisYear = date('Y');
if ($thisYear > $startYear) {
	$thisYear = date('y');
	$dates = "$startYear&ndash;$thisYear";
} else {
	$dates = $startYear;
}
echo $dates;
?>