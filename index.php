<?php
include ("include/connection.php");
SESSION_START();
?>
<html>
<head>
<title>
Home
</title>

<style>
ul {
    list-style-type: none;
	position:top;
	margin:0;
    background-color: #2196F3;
}
.buttons
{
	margin-top:200;
	margin-left:300;
	margin-right:300;
}
#generate
{
	background-color: #2196F3;
}
#view
{
	background-color: #2196F3;
}
#search
{
	background-color: #2196F3;
}
h1
{
	font-family:Lucida Sans Unicode;
	font-color:white;
}
.ab
{
	text-decoration:none;
	color:white;
}
.ab:hover
{
	color:grey;
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
<div class="buttons">
<center>
<div id="generate">
<a href="question.php" class="ab">
<h1>
GENERATE QUESTION PAPER
</h1>
</a>
</div>
<div id="search">
<a href="search.php" class="ab">
<h1>
Search
</h1>
</a>
</div>
<div id="view">
<a href="create.php" class="ab">
<h1>
View Question Paper
</h1>
</a>
</div>
</center>
</div>
</body>
</html>