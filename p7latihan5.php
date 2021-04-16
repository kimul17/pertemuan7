<HTML>
<HEAD>
<TITLE> Penggunaan List 2 </TITLE>
</HEAD>
<BODY>
<?php
$program = array('Si Kancil','Sopo & Jarwo','Avengers');
list($Majalah, , $Film) = $program;
echo "Jenis Buku & Hiburan :";
echo "<br />";
echo "Cerpen : $Majalah";
echo "<br />";
echo "Bioskop : $Film";
?> 
</BODY>
</HTML>