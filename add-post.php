<?php include('templates/links.php'); ?>

<div>
      <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <?php 
       include 'postClass.php';
       $posts = new Post();
       $post = $posts->add();

       ?>
          <form class="form-example" action="" method="post">
            <h1>Add New Post Form</h1>
            
            <!-- Input fields -->
            <div class="form-group">
              <label for="username">Title:</label>
              <input
                type="text"
                class="form-control username"
                
                name="title"
              />
            </div>
            <div class="form-group">
              <label for="content">Content:</label>
              <textarea  type="text"
                class="form-control"  name="content">       
</textarea >

            </div>
           
         <!--   <div class="form-group">
            <label for="formFile">Image:</label>

            <input class="form-control" type="file" id="formFile">

            </div> -->
            <div class="form-group">
              <label for="category "> Post Category:</label>
              <input
                type="text"
                class="form-control"
               
                placeholder="category"
                name="category"
              />
            </div>

            <button type="submit" name='save' class="btn btn-dark btn-customized mt-4">
             Save
            </button>
          </form>
          <!-- Form end -->
        </div>
      </div>
    </div>