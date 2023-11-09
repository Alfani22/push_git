<?php
$SN = $_POST["SN"];
$len = strlen($SN);
$inFile = "data.dat";
$in = fopen($inFile, "r") or die("Can't open file");
$line = fgets($in);
$found = 0;
while ((!feof($in)) && ($found == 0)) {
    list($SN_dat, $a1, $b1, $c1, $a2, $b2, $c2, $a3, 
$b3, $c3, $r) = fscanf($in, "%s %f %f %f %f %f %f %f %f 
%f %f");
if (strncasecmp($SN_dat, $SN, $len) == 0) {
$found = 1;
}
}
fclose($in);
if ($found == 0) {
echo "Couldn't find this instrument.";
} else {
echo "<table border='1'>
<tr bgcolor='lightgray'>
<th rowspan='2'>
Station
</th>
<th colspan='3'>
Simulated
</th>
<th colspan='3'>
Measured
</th>
<th colspan='3'>
Difference
</th>
<th rowspan='2'>
R2
</th>
</tr>";
echo "<tr bgcolor='lightgray'>
<th>Mean</th>
<th>5%tile</th>
<th>95%tile</th>
<th>Mean</th>
<th>5%tile</th>
<th>95%tile</th>
<th>Mean</th>
<th>5%tile</th>
<th>95%tile</th>
</tr>";
echo "<tr>
<th>$SN</th>
<th>$a1</th>
<th>$b1</th>
<th>$c1</th>
<th>$a2</th>
<th>$b2</th>
<th>$c2</th>
<th>$a3</th>
<th>$b3</th>
<th>$c3</th>
<th>$r</th>
</tr>";
echo "</table>";
}