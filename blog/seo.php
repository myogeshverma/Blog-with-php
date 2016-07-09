<?php

if(isset($_GET['id'])){
	$id = $_GET['id']; 
	$query = "SELECT * FROM blog_posts WHERE postID = $id ";
	$query_data = mysql_query($query);
	$row = mysql_fetch_assoc($query_data);
?>
<meta name="author" content="Maxwell Relocations">
<meta name="keywords" content="<?php echo $row['tags']?>">
<meta name="description" content="<?php echo $string = substr($row['postDesc'], 0,120);?>">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Maxwell Relocations -  <?php echo $row['postTitle'];?></title>

<?php } else {
 ?> 
<meta name="author" content="Maxwell Relocations">

<meta name="description" content="Maxwell Relocations 'best packers and movers">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Maxwell Relocations  -  1800-200-7009 </title>
<?php
}
?>
