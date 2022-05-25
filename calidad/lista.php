<?php
include('conecta.php');

//for total count data
$limit=10;
$tot_result = mysql_query("SELECT COUNT(idarea) FROM areas1",$link);   
$row = mysql_fetch_array($tot_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);

//for first time load data

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit; 
$rs_result = mysql_query( "SELECT * FROM areas1 ORDER BY idarea ASC LIMIT $start_from, $limit",$link); 
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>
<title></title>
<script>
</script>
</head>
<body>
<?php
echo "valor de limit:$limit-----valor :$start_from";
?>
<div class="container" style="padding-top:20px;">
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>id</th>  
<th>Clave</th>
<th>Titular</th>  
</tr>  
</thead>  
<tbody idarea="target-content">
<?php  
while ($row = mysql_fetch_array($rs_result)) {
?>  
            <tr>  
            <td><?php echo $row["idarea"].' - '.$start_from; ?></td>  
            <td><?php echo $row["clave"]; ?></td>  
            <td><?php echo $row["titu"]; ?></td>  
            </tr>  
<?php  
};  
?>
</tbody> 
</table>
<nav><ul class="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  idarea="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
            <?php else:?>
            <li idarea="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>          
<?php endfor;endif;?>
</ul></nav>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
$('.pagination').pagination({
        items: <?php echo $total_records;?>,
        itemsOnPage: <?php echo $limit;?>,
        cssStyle: 'light-theme',
		currentPage : 1,
		onPageClick : function(pageNumber) {
			jQuery("#target-content").html('loading...');
			jQuery("#target-content").load("pagination.php?page=" + pageNumber);
		}
    });
});
</script>