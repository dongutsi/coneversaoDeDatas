<?php

function converter($date) {
	
	echo $date;
	$data = date_parse_from_format('Y.m.d', $date);
	
	$day = str_pad($data['day'],2,"0", STR_PAD_LEFT);
	$month = str_pad($data['month'],2,"0", STR_PAD_LEFT);
	return $day.'/'.$month.'/'.$data['year'];
	
}

print "A data atual eh : ".converter("20150131");

?>