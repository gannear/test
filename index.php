<?php

//this is my changes
$con=mysql_connect("localhost","root","");
$secdb=mysql_select_db("web");
if(isset($_POST['submit']))
{
    $sql="insert into menu (name) values ('".$_POST['menu']."')";
	//echo $sql;
	$run_sql=mysql_query($sql);

}

?>
<form name="frmmenu" id="frmmenu" method="post" action="">
<table>
<tr>
<td>Enter the Name of Mnu</td>
<td><input type="text" name="menu" id="menu"></td>
</tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Submit"></td>
<td></td>
</tr>
</form>