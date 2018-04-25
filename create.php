<?php
include ("include/connection.php");
SESSION_START();
?>
<html>
<head>
<title>
Create
</title>
<style>
ul {
    list-style-type: none;
	position:top;
	margin:0;
    background-color: #2196F3;
}
table 
{
	margin-top:40;
	margin-left:80;
}
.stdhead
{
		font-family:Lucida Sans Unicode;
	
	text-align: left;
}
.stdrow
{
		font-family:Lucida Sans Unicode;
	padding: 5px 10px;
	
	text-align: left;
}
.stdr
{	
	font-family:Lucida Sans Unicode;
	padding: 5px 10px;
	padding-left:10px;
}
footer
{
	background-color: #2196F3;
	float:bottom;
}
a
{
	font-family:Lucida Sans Unicode;
	color:white;
	font-size:15px;
	text-decoration:none;
}
.create {
	font-family:Lucida Sans Unicode;
    display: inline-block;
    color: black;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
}

.create:hover {
    background-color: #ebf6f9;
}
.head
{
	font-family:Lucida Sans Unicode; 
	color:white;
	text-decoration:none;
}
.head:hover
{
	color:grey;
}
</style>
</head>
<body>
<ul>

<li style="padding:20px 16px;"><a href="index.php" class="head">Question Paper Generator</a></li>
	
</ul>

<?php



$sql="select * from question order by priority";
$result=mysqli_query($con,$sql);
?>
<table>
  
    <tr class="stdhead">
      <th class="stdr"> No.</th>
	  <th>     </th>
	  <th class="stdr">Question</th>
    </tr>
	
<?php
while($row=mysqli_fetch_array($result))
{
?>

    <tr class="stdrow">
      
	  <td class="stdr"><?php echo $row['priority']?></td>
	  <td>     </td>
	  <td class="stdr"><?php echo $row['question']?></td>
	  </tr>
 	
<?php
}
?>



</table>
<!--
<footer>
<center>
<h3><a href="#">Download</a></h3>
</center>
</footer>
-->
</body>
</html>