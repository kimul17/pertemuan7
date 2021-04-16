<HTML>
<HEAD>
<TITLE> Penggunaan List 2 </TITLE>
</HEAD>
<BODY>
<?php
$program = array('Si Kancil','Adit ,Sopo&Jarwo','Avengers: Infinity War');
list($Majalah, , $Film) = $program;
echo "Jenis Buku & Hiburan :";
echo "<br />";
echo "Cerpen : $Majalah";
echo "<br />";
echo "Bioskop : $Film";
?> 