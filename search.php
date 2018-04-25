<?php
include ("include/connection.php");
SESSION_START();
?>
<html>
<head>
<title>search</title>
<link rel="stylesheet" type="text/css" media="screen" href="./search1_files/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="all" href="./search1_files/fonts7.css">
<link rel="stylesheet" type="text/css" media="all" href="./search1_files/screen7.css">
<link rel="stylesheet" type="text/css" media="print" href="./search1_files/print7.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="./search1_files/responsive7.css">
<style type="text/css" media="all">
ul {
    list-style-type: none;
	position:top;
	margin:0;
    background-color: #2196F3;
}
body{
	background: #FCFCFC;
	background-size: cover;
	font-family: 'Lato',sans-serif;
	font-size: 13px;
	background-position: 50% 50%;
}

.form_table{
	width: 650px;
	margin-left: auto;
	margin-right: auto;
	border-radius: 0;
	border: 1px solid #D9DDE2;
	background: #FFFFFF;
	background-size: cover;
	color: #36454E;
	overflow: hidden;
	box-shadow: none;
	background-position: 50% 50%;
	margin-top:140px;
}

.form_table a{
	color: #0D47A1;
}

.outside a{
	color: #0D47A1;
}

.form_table a:visited{
	color: #0D47A1;
}

.outside a:visited{
	color: #0D47A1;
}

.segment_header{
	width: auto;
	margin: 1px;
	color: #FFFFFF;
	background: #2196F3;
	background-size: cover;
	background-repeat: repeat;
	background-position: 50% 50%;
	border-radius: 0;
}

.segment_header h1{
	border-radius: 0;
	padding: 20px 10px;
	font-family: 'Lato',sans-serif;
}

.q{
	padding: 10px;
	margin-bottom: 10px;
	margin-left: 10px;
	float: left;
	display: block;
}

.q .question{
	font-weight: bold;
}

.q .left_question_first{
	width: 15em;
}

.required .icon{
	background-image: none;
	background-position: left;
	background-repeat: no-repeat;
	font-size: 13px;
	padding-left: 14px;
}

.q .text_field{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 10px;
}

.q .file_upload{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin-top: 1px;
	padding: 10px;
}

.q .file_upload_button{
	margin-top: 2px;
}

.q .inline_grid td{
	padding: 5px;
	vertical-align: baseline;
}

.q .drop_down{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 9px;
}

.q .matrix th{
	color: #7A858B;
	background: #F0F2F4;
	padding: 5px;
	font-weight: bold;
	text-align: center;
	vertical-align: bottom;
}

.q .matrix td{
	padding: 5px;
	text-align: center;
	white-space: nowrap;
	height: 26px;
	border-bottom: 1px solid #D9DDE2;
	border-top: 1px solid #D9DDE2;
}

.q .matrix td.question{
	border-right: 1px solid #D9DDE2;
	font-weight: normal;
}

.q .matrix .multi_scale_sub th{
	font-weight: normal;
	border-top: 1px solid #D9DDE2 !important;
	background: #F4F6F9;
}

.q .matrix .multi_scale_break{
	border-right: 1px solid #D9DDE2;
}

.q .matrix_row_dark td{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_dark td.question{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_light td{
	color: #36454E;
	background: #FFFFFF;
}

.q .matrix_row_light td.question{
	color: #36454E;
	background: #FFFFFF;
}

.q .rating_ranking td{
	padding: 5px;
}

.q .scroller{
	border: 1px solid #D9DDE2;
}

.highlight{
	background: #FFF9C4             !important;
}

tr.highlight td{
	background: #FFF9C4             !important;
}

.outside{
	color: #36454E;
}

.outside_container{
	width: 650px;
	padding: 1em 0;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #36454E;
}

.outside_container .submit_button{
	color: #FFFFFF !important;
	background: #1795FF;
	background-size: auto;
	border-style: none;
	border-width: 0px;
	border-color: #FFFFFF;
	border-radius: 2px;
	text-align: center;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	font-weight: normal;
	min-width: 20%;
	padding: 10px 20px;
	text-transform: none;
	box-shadow: none;
}

.outside_container .submit_button:hover{
	background: #106AB7;
	border-color: #BBBBBB;
	background-size: auto;
}

.progressBarWrapper{
	border-radius: 0;
	background: #FFFFFF;
	background-size: cover;
	border-color: #D9DDE2;
}

.progressBarBack{
	color: #FFFFFF;
	background-color: #1795FF;
}

.progressBarFront{
	color: #36454E;
}

.ui-widget{
	font-family: 'Lato',sans-serif;
}

.invalid{
	background: #FDF1F0;
}

.invalid .invalid_message{
	color: #EC756B;
	background: #FDF1F0;
	border: 1px solid #EC756B;
	border-radius: 2px;
}

.form_table.invalid{
	border: 2px solid #EC756B;
}

.invalid .matrix .invalid_row{
	background: #FDF1F0;
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
<script type="text/javascript" src="./search1_files/jquery.min.js.download"></script>
<script type="text/javascript" src="./search1_files/jquery-ui.min.js.download"></script>
<script type="text/javascript" src="./search1_files/form7.js.download"></script>
</head>
<body>

<ul>

<li style="padding:20px 16px;"><a href="index.php" class="head">Question Paper Generator</a></li>
	
</ul>

<form method="POST" id="FSForm" action="search.php"><div style="display:none;">
<input type="hidden" name="locid" value="kHG2Mr/form8">
<input type="hidden" name="EParam" value="AT1kKIiyxDwRysvDs2+Q6KeLTfEDMMCu3Lt0WnUg/9yFR1c49XYCiaW+EgFDAtcF">
<input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0">
<input type="hidden" name="Referrer" id="Referrer" value="">
<input type="text" name="subject_line" id="subject_line" autocomplete="off"><label for="subject_line">subject_line</label>
</div>

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q2" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-weight:bold;font-size:18px;padding:20px 1em ;">Search</h1></div>
</div>

<div class="clear"></div>

<div id="q3" class="q">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="RESULT_TextField-1"></label>
<input type="text" name="search" class="text_field" id="RESULT_TextField-1" placeholder="Enter keyword" size="25" maxlength="255" value="">
</div>
<div class="clear"></div>


</div>
<input type="hidden" name="EParam" value="FzpUCZwnDno=">
<div class="outside_container">
<div class="buttons_reverse">
<input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit"></div></div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$search=$_POST['search'];
$sql="select * from question where question like '%$search%'";
$result=mysqli_query($con,$sql);
?>
<center>
<table>
  
    <tr class="stdhead">
      <th class="stdr"> No.</th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
	  <th>     </th>
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
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td>     </td>
	  <td class="stdr"><?php echo $row['question']?></td>
	  </tr>
 	
<?php
}
}
?>



</table>
</center>

</body></html>