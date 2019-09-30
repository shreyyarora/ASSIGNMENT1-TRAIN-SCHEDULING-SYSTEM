<!DOCTYPE html>
<head>
<title> TRAIN SCHEDULE</title>
<style>
table
{
border: 10px solid black; 
}
td,th
{
border:1px solid black; padding:15px; spacing:15px; 
}
th
{
background-color:dodgerblue;
}
td:nth-child(1)
{
background-color:dodgerblue;
}

</style>
</head>
</html>
<?php
if($_POST)
{

$sname=$_POST['sname'];

$n1=$_POST['n1'];
$tn1=$_POST['tn1'];
$s1=$_POST['s1'];
$e1=$_POST['e1'];

$supf1=$_POST['supf1'];
$suat1=$_POST['suat1'];
$sudt1=$_POST['sudt1'];

$mpf1=$_POST['mpf1'];
$mat1=$_POST['mat1'];
$mdt1=$_POST['mdt1'];

$tpf1=$_POST['tpf1'];
$tat1=$_POST['tat1'];
$tdt1=$_POST['tdt1'];

$wpf1=$_POST['wpf1'];
$wat1=$_POST['wat1'];
$wdt1=$_POST['wdt1'];

$thpf1=$_POST['thpf1'];
$that1=$_POST['that1'];
$thdt1=$_POST['thdt1'];

$frpf1=$_POST['frpf1'];
$frat1=$_POST['frat1'];
$frdt1=$_POST['frdt1'];

$sapf1=$_POST['sapf1'];
$saat1=$_POST['saat1'];
$sadt1=$_POST['sadt1'];

$n2=$_POST['n2'];
$tn2=$_POST['tn2'];
$s2=$_POST['s2'];
$e2=$_POST['e2'];

$supf2=$_POST['supf2'];
$suat2=$_POST['suat2'];
$sudt2=$_POST['sudt2'];

$mpf2=$_POST['mpf2'];
$mat2=$_POST['mat2'];
$mdt2=$_POST['mdt2'];

$tpf2=$_POST['tpf2'];
$tat2=$_POST['tat2'];
$tdt2=$_POST['tdt2'];

$wpf2=$_POST['wpf2'];
$wat2=$_POST['wat2'];
$wdt2=$_POST['wdt2'];

$thpf2=$_POST['thpf2'];
$that2=$_POST['that2'];
$thdt2=$_POST['thdt2'];

$frpf2=$_POST['frpf2'];
$frat2=$_POST['frat2'];
$frdt2=$_POST['frdt2'];

$sapf2=$_POST['sapf2'];
$saat2=$_POST['saat2'];
$sadt2=$_POST['sadt2'];

$n3=$_POST['n3'];
$tn3=$_POST['tn3'];
$s3=$_POST['s3'];
$e3=$_POST['e3'];

$supf3=$_POST['supf3'];
$suat3=$_POST['suat3'];
$sudt3=$_POST['sudt3'];

$mpf3=$_POST['mpf3'];
$mat3=$_POST['mat3'];
$mdt3=$_POST['mdt3'];

$tpf3=$_POST['tpf3'];
$tat3=$_POST['tat3'];
$tdt3=$_POST['tdt3'];

$wpf3=$_POST['wpf3'];
$wat3=$_POST['wat3'];
$wdt3=$_POST['wdt3'];

$thpf3=$_POST['thpf3'];
$that3=$_POST['that3'];
$thdt3=$_POST['thdt3'];

$frpf3=$_POST['frpf3'];
$frat3=$_POST['frat3'];
$frdt3=$_POST['frdt3'];

$sapf3=$_POST['sapf3'];
$saat3=$_POST['saat3'];
$sadt3=$_POST['sadt3'];


echo"<center><table >";

echo"<caption>";
echo"$sname";
echo"</caption>";

echo" <tr>";
echo"<th>TRAIN DETAILS</th>";
echo"<th>SUNDAY</th>";
echo" <th>MONDAY</th>";
echo" <th>TUESDAY</th>";
echo" <th>WEDNESDAY</th>";
echo" <th>THURSDAY</th>";
echo"<th>FRIDAY</th>";
echo"<th>SATURDAY</th>";
echo"</tr>";

echo"<tr>";
echo"<td><b>$n1<br>$tn1<br>$s1 to $e1</b></td>";
echo"<td>$supf1<br>$suat1<br>$sudt1</td>";
echo"<td>$mpf1<br>$mat1<br>$mdt1</td>";
echo"<td>$tpf1<br>$tat1<br>$tdt1</td>";
echo"<td>$wpf1<br>$wat1<br>$wdt1</td>";
echo"<td>$thpf1<br>$that1<br>$thdt1</td>";
echo"<td>$frpf1<br>$frat1<br>$frdt1</td>";
echo"<td>$sapf1<br>$saat1<br>$sadt1</td>";

echo"<tr>";
echo"<td><b>$n2<br>$tn2<br>$s2 to $e2</b></td>";
echo"<td>$supf2<br>$suat2<br>$sudt2</td>";
echo"<td>$mpf2<br>$mat2<br>$mdt2</td>";
echo"<td>$tpf2<br>$tat2<br>$tdt2</td>";
echo"<td>$wpf2<br>$wat2<br>$wdt2</td>";
echo"<td>$thpf2<br>$that2<br>$thdt2</td>";
echo"<td>$frpf2<br>$frat2<br>$frdt2</td>";
echo"<td>$sapf2<br>$saat2<br>$sadt2</td>";

echo"<tr>";
echo"<td><b>$n3<br>$tn3<br>$s3 to $e3</b></td>";
echo"<td>$supf3<br>$suat3<br>$sudt3</td>";
echo"<td>$mpf3<br>$mat3<br>$mdt3</td>";
echo"<td>$tpf3<br>$tat3<br>$tdt3</td>";
echo"<td>$wpf3<br>$wat3<br>$wdt3</td>";
echo"<td>$thpf3<br>$that3<br>$thdt3</td>";
echo"<td>$frpf3<br>$frat3<br>$frdt3</td>";
echo"<td>$sapf3<br>$saat3<br>$sadt3</td>";


echo"</table>";
}

?>