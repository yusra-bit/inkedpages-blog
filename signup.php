<?php include('templates/links.php'); ?>

<div>
      <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <form class="form-example" action="" method="post">
            <h1>Registration Form</h1>
            
            <!-- Input fields -->
            <div class="form-group">
              <label for="username">Username:</label>
              <input
                type="text"
                class="form-control username"
                id="username"
                placeholder="Username"
                name="username"
              />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input
                type="text"
                class="form-control email"
                id="email"
                placeholder="Email..."
                name="email"
              />
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input
                type="password"
                class="form-control password"
                id="password"
                placeholder="Password"
                name="password"
              />
            </div>
            <div class="form-group">
            <label for="formFile">Avatar:</label>

            <input class="form-control" type="file" id="formFile">

            </div>

            <button type="submit" class="btn btn-dark btn-customized mt-4">
              Sign Up
            </button>
          </form>
          <!-- Form end -->
        </div>
      </div>
    </div>