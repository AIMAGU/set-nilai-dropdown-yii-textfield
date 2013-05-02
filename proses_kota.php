<?php
mysql_connect("localhost","root","");
mysql_select_db("dbajax");

$propinsi = $_GET['propinsi'];
$kota = mysql_query("SELECT * FROM kabupaten WHERE id_propinsi='$propinsi'");
echo "<option>--Pilih Kota--</option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=$k[id_kabupaten]>$k[nama_kabupaten]</option> \n";
}
?>
