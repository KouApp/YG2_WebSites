<?php
$pdf = fopen ('dosyalar/rapor-'.$_GET['id'].'.pdf','w');
$data = base64_decode($_GET['base64']);
fwrite ($pdf,$data);
fclose ($pdf);
echo '<iframe src="dosyalar/rapor-'.$_GET['id'].'.pdf" width="100%" height="100%"></iframe>';
?>
