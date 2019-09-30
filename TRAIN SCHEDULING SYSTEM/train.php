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
<body>
<form name="train" method="POST" action="train_action.php">

<table >
<caption>
TRAIN SCHEDULE<br>
<input type="text" name="sname" placeholder="Enter Station Name"> 
</caption>

<tr>
<th>TRAIN DETAILS</th>
<th>SUNDAY</th>
<th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
<th>SATURDAY</th>
</tr>

<tr>
<td><b>
Train Number <input type=number name="n1"><br>
Train Name <input type=text name="tn1"><br>
From: <input type=text name="s1"><br>
To:<br><input type=text name="e1">
</b></td>

<td>
Choose Platform <select name="supf1">
<option> 
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="suat1"><br>
Enter Departure Time <input type=time name="sudt1"><br>
</td>

<td>
Choose Platform <select name="mpf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="mat1"><br>
Enter Departure Time <input type=time name="mdt1"><br>
</td>

<td> 
Choose Platform <select name="tpf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="tat1"><br>
Enter Departure Time <input type=time name="tdt1"><br>
</td>

<td>
Choose Platform <select name="wpf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="wat1"><br>
Enter Departure Time <input type=time name="wdt1"><br>
</td>

<td>
Choose Platform <select name="thpf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="that1"><br>
Enter Departure Time <input type=time name="thdt1"><br>
</td>

<td>
Choose Platform <select name="frpf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="frat1"><br>
Enter Departure Time <input type=time name="frdt1"><br>
</td>

<td> 
Choose Platform<select name="sapf1">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="saat1"><br>
Enter Departure Time <input type=time name="sadt1"><br>
</td>


</tr>



<tr>
<td><b>
Train Number <input type=number name="n2"><br>
Train Name <input type=text name="tn2"><br>
From: <input type=text name="s2"><br>
To:<br><input type=text name="e2">
</b></td>

<td>
Choose Platform <select name="supf2">
<option> 
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="suat2"><br>
Enter Departure Time <input type=time name="sudt2"><br>
</td>

<td>
Choose Platform <select name="mpf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="mat2"><br>
Enter Departure Time <input type=time name="mdt2"><br>
</td>

<td> 
Choose Platform <select name="tpf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="tat2"><br>
Enter Departure Time <input type=time name="tdt2"><br>
</td>

<td>
Choose Platform <select name="wpf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="wat2"><br>
Enter Departure Time <input type=time name="wdt2"><br>
</td>

<td>
Choose Platform <select name="thpf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="that2"><br>
Enter Departure Time <input type=time name="thdt2"><br>
</td>

<td>
Choose Platform <select name="frpf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="frat2"><br>
Enter Departure Time <input type=time name="frdt2"><br>
</td>

<td> 
Choose Platform <select name="sapf2">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="saat2"><br>
Enter Departure Time <input type=time name="sadt2"><br>
</td>


</tr>



<tr>
<td><b>
Train Number <input type=number name="n3"><br>
Train Name <input type=text name="tn3"><br>
From: <input type=text name="s3"><br>
To:<br><input type=text name="e3">
</b></td>

<td>
Choose Platform <select name="supf3">
<option> 
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="suat3"><br>
Enter Departure Time <input type=time name="sudt3"><br>
</td>

<td>
Choose Platform <select name="mpf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="mat3"><br>
Enter Departure Time <input type=time name="mdt3"><br>
</td>

<td> 
Choose Platform <select name="tpf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="tat3"><br>
Enter Departure Time <input type=time name="tdt3"><br>
</td>

<td>
Choose Platform <select name="wpf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="wat3"><br>
Enter Departure Time <input type=time name="wdt3"><br>
</td>

<td>
Choose Platform <select name="thpf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="that3"><br>
Enter Departure Time <input type=time name="thdt3"><br>
</td>

<td>
Choose Platform <select name="frpf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select> <br> 
Enter Arrival Time <input type =time name="frat3"><br>
Enter Departure Time <input type=time name="frdt3"><br>
</td>

<td> 
Choose Platform <select name="sapf3">
<option>
<option> PLATFORM 1
<option> PLATFORM 2
<option> PLATFORM 3
<option> PLATFORM 4
<option> PLATFORM 5	
</select><br> 
Enter Arrival Time <input type =time name="saat3"><br>
Enter Departure Time <input type=time name="sadt3"><br>
</td>


</tr>
</table>
<center> <input type=reset> <input type=submit value="Generate Schedule">
</form>
</body>
</html>

