<?php
$conn = mysql_connect("localhost","root","","phantrang");
if(isset($_GET['page'])){
    $page=$_GET['page'];
} else {
    $page=1;    
}
$limit=10;
$start=($page-1)*$limit;
$total_title= mysql_num_rows(mysql_query($conn,"SELECT * FROM TINTUC"));
$total_page=$total_title/$limit;
$query="SELECT * FROM tintuc LIMIT".$start.",".$limit;
$resurt= mysql_query($conn,$query);
echo "<div class=\"title\">";
while($row= mysql_fetch_array($result)){
    echo 'a href="#"'.$row['id'].'.'.$row['title'].'</a><br/>';
}
echo "</div>";
echo "<div class=\"pagination\">";
for($i=1;$i<=$total_page;$i++){
    echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a>|';
}
echo "</div>";
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

