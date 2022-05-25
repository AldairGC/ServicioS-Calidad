<?php
include('conecta.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$rs_result = mysql_query("SELECT * FROM areas1 ORDER BY idarea ASC LIMIT $start_from, $limit",$link); 
?>

<?php  
while ($row = mysql_fetch_array($rs_result)) {
?>  
            <tr>  
            <td><?php echo $row["idarea"]; ?></td>  
            <td><?php echo $row["clave"]; ?></td>  
            <td><?php echo $row["titu"]; ?></td>  
            </tr>  
<?php  
};  
?>
