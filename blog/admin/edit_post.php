<?php 
include('header.php');
$id = $_GET['id'];
if(isset($_POST['update'])){
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$tags = $_POST['tags'];
$uploadDir = 'uploads/';
$fileName = $_FILES['image']['name'].strtotime("now");
$tmpName = $_FILES['image']['tmp_name'];
$new_image_name = $uploadDir.$title.'_'.date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
$result = move_uploaded_file($tmpName, $new_image_name);
if (!$result) {
echo "Error uploading file";
exit;
}

if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);

}
$query = "UPDATE blog_posts
SET postTitle='$title',postDesc='$description',postCont='$content',image='$new_image_name',tags='$tags' 
WHERE postID= $id";

mysql_query($query);
}

$query_fetch = "SELECT * FROM blog_posts WHERE postID= $id";
$query_fetch_data = mysql_query($query_fetch);
$row = mysql_fetch_assoc($query_fetch_data);
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Edit Your Blog Here </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
                <div class="box-header with-border">
                  
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action=" " enctype="multipart/form-data">
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input class="form-control" type="text" name="title" value="<?php echo $row['postTitle']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea class="form-control" name="description" value="<?php echo $row['postDesc']?>"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tags</label>
                      <input type="taxt" class="form-control" name="tags" value="<?php echo $row['tags']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" name="image" value="<?php echo $row['image']?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                       <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Place Your Content Here </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                  <form>
                    <textarea class="textarea" name = "content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="<?php echo $row['postCont']?>"></textarea>
                  </form>
                </div>
              </div>
                    </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                  </div>
                </form>
              </div>

              
        </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php include('footer.php');

?>