<?php
include("conn.php");

?>
<!DOCTYPE HTML">
<html>
<head>
<title>LMS Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
 <?php
                    $sql = "SELECT * FROM quiz_question";
                  $result = mysqli_query($db,$sql);
                  while ($row = mysqli_fetch_array($result)) {

echo "<form name='myfm' method='post' action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
echo "<tR><td><span class='style2'>".$row['que_desc']." </style>";
echo "<tr><td class='style8'><input type='radio' name='ans' value='1'>$row[3]";
echo "<tr><td class='style8'> <input type='radio' name='ans' value='2'>$row[4]";
echo "<tr><td class='style8'><input type='radio' name='ans' value='3'>$row[5]";
echo "<tr><td class='style8'><input type='radio' name='ans' value='4'>$row[6]";

// if($_SESSION[qn]<mysqli_num_rows($rs)-1)

echo "</table></table>";

                    
                    }
echo "<tr><td><input type='submit' name='next_que' value='Next Question'></form>";

// echo "<tr><td><input type='submit' name='get_result' value='Get Result'></form>";
     //                echo "<form name='myfm' method='post' action=quiz.php>";
					// echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
					// //$n=$_SESSION[qn]+1;
					// echo "<tR><td><span class='style2'>Que ".  $n .": $row[2]</style>";
					// echo "<tr><td class='style8'><input type='radio' name='ans' value='1'>$row[3]";
					// echo "<tr><td class='style8'> <input type='radio' name='ans' value='2'>$row[4]";
					// echo "<tr><td class='style8'><input type='radio' name='ans' value='3'>$row[5]";
					// echo "<tr><td class='style8'><input type='radio' name='ans' value='4'>$row[6]";

					// // if($_SESSION[qn]<mysqli_num_rows($rs)-1)
					// echo "<tr><td><input type='submit' name='next_que' value='Next Question'></form>";

					// echo "<tr><td><input type='submit' name='get_result' value='Get Result'></form>";
					// echo "</table></table>";




     //                echo "<select name='category_list' id='category_list' class='form-control'><option value='select'>Select Category</option>";
     //                while ($row = mysqli_fetch_array($result)) {
     //                    echo "<option value='" . $row['ai_cat_name'] ."'>" . $row['ai_cat_name'] ."</option>";
     //                }
     //                echo "</select>";

                    ?>



<?php
//$query="select * from quiz_question";

//$row= mysqli_fetch_row($rs);
// echo "<form name='myfm' method='post' action=quiz.php>";
// echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
// //$n=$_SESSION[qn]+1;
// echo "<tR><td><span class='style2'>Que ".  $n .": $row[2]</style>";
// echo "<tr><td class='style8'><input type='radio' name='ans' value='1'>$row[3]";
// echo "<tr><td class='style8'> <input type='radio' name='ans' value='2'>$row[4]";
// echo "<tr><td class='style8'><input type='radio' name='ans' value='3'>$row[5]";
// echo "<tr><td class='style8'><input type='radio' name='ans' value='4'>$row[6]";

// // if($_SESSION[qn]<mysqli_num_rows($rs)-1)
// echo "<tr><td><input type='submit' name='next_que' value='Next Question'></form>";

// echo "<tr><td><input type='submit' name='get_result' value='Get Result'></form>";
// echo "</table></table>";
?>
</body>
</html>