<?php 
include('connection.php');
$id = $_GET['id'];

$query =  "DELETE FROM blog_posts WHERE postID= $id ";
$result = mysql_query($query);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
header("Location: post_blog.php");

 ?>