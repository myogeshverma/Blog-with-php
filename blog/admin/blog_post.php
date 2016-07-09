<?php
include('connection.php');
if(isset($_POST['submit'])){
$title = $_POST['title'];
$description = $_POST['description'];
$content =  htmlspecialchars($_POST['content'],ENT_QUOTES);
$uploadDir = 'uploads/';
$fileName = $_FILES['image']['name'].strtotime("now");
$tmpName = $_FILES['image']['tmp_name'];
$date_time = date("Y-m-d h:i:sa");
$tags = $_POST['tags'];

$new_image_name = '/blog/admin/'.$uploadDir.$title.'_'.date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
$result = move_uploaded_file($tmpName, $new_image_name);
if (!$result) {
echo "Error uploading file";
exit;
}

if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);

}

$query = "INSERT INTO blog_posts (postTitle,postDesc,postCont,image,postDate,tags)VALUES('$title','$description','$content','$new_image_name','$date_time','$tags')";

mysql_query($query) or die('Error, query failed : ' . mysql_error());

header("Location: http://www.maxwellrelocations.com/blog/admin/post_blog.php");
}
?>
