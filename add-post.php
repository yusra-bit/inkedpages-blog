<?php include('templates/links.php'); ?>

<div>
      <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <form class="form-example" action="" method="post">
            <h1>Add New Post Form</h1>
            
            <!-- Input fields -->
            <div class="form-group">
              <label for="username">Title:</label>
              <input
                type="text"
                class="form-control username"
                id="username"
                placeholder="Username"
                name="username"
              />
            </div>
            <div class="form-group">
              <label for="content">Content:</label>
              <textarea  type="text"
                class="form-control "  placeholder="Email...">
              
           
              
</textarea >

            </div>
           
            <div class="form-group">
            <label for="formFile">Image:</label>

            <input class="form-control" type="file" id="formFile">

            </div>
            <div class="form-group">
              <label for="category "> Post Category:</label>
             <select name="" id="" class="form-control">
                <option value="">Tech</option>
                <option value="">UI / UX</option>
                <option value="">AI</option>


             </select>
            </div>

            <button type="submit" class="btn btn-dark btn-customized mt-4">
             Save
            </button>
          </form>
          <!-- Form end -->
        </div>
      </div>
    </div>