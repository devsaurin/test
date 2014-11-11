<?php
	$i=0;
	$upto=100000; 
	$start = microtime(true);
	$even = 'even';
	$odd = 'odd';
	while($i<$upto){
		$re = ($i%2==0)?$even:$odd;
		$i++;
	}
	
	$end = microtime(true);
	$total = $end-$start;
	$avg = $total/$upto;
	$second = $avg/1000000;
	$milisecond = $avg/1000;
	echo '<br />Avg time : <br /> Second:'.$second.'<br />Mili: '.$milisecond.'<br />Micro:'.$avg;
?>