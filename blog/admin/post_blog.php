<?php include('header.php');?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Post Your Blog Here </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
                <div class="box-header with-border">
                  
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="blog_post.php" enctype="multipart/form-data">
                  <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tags</label>
                      <input type="taxt" class="form-control" name="tags">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" name="image" >
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
                    <textarea class="textarea" name = "content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </form>
                </div>
              </div>
                    </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
                </form>
              </div>

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table example1 class=" example1 table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
              $sql = 'SELECT * FROM blog_posts';
               $retval = mysql_query( $sql);
             
                 while($row = mysql_fetch_assoc($retval))
                {   
            ?>
                      <tr>
                      
                        <td><?php echo $row['postTitle']; ?></td>
                        <td><a href="edit_post.php?id=<?php echo $row['postID'];?>" class="btn btn-block btn-info">Edit</a></td>
                        <td><a href="delete_post.php?id=<?php echo $row['postID']; ?>" class="btn btn-block btn-danger">Delete</a></td>
                      </tr>
                     <?php
                    }
                  ?>  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>
        </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php include('footer.php');?>      
