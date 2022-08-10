<?php 
function debugLog($o) {
 $file_bulan = 'log/' . 'log' . date("Y-m") . '.log';
 ob_start();
 var_dump($o);
 $c = ob_get_contents();
 ob_end_clean();
 $flog=fopen($file_log, "a+");
 fputs($flog,"$c\n");
 fclose($flog);
}
?>
