<?php
$con = mysql_connect("localhost","root", ""); 
if (!$con) { 
 die('Could not connect: ' . mysql_error()); 
} 

mysql_select_db("cinema_toto", $con); 

if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM filme WHERE lower(denumire) like '%" . $_POST["keyword"] . "%' ORDER BY denumire LIMIT 0,6";
$result = mysql_query($query);
if(!empty($result)) {
?>
<ul id="name-list">
<?php
while($row = mysql_fetch_array($result)) { 
?>
<li onClick="selectMovieName('<?php echo $row["denumire"]; ?>');"><?php echo $row["denumire"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>