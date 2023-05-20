<?php include('templates/links.php');
 ?>
<?php
 if($_POST['login']){  
  $username = $_POST['username'];  
  $password = $_POST['password'];  
  $user = $funObj->Login($username, $password);  
  if ($user) {  
      // Registration Success  
     header("location:home.php");  
  } else {  
      // Registration Failed  
      echo "<script>alert('Emailid / Password Not Match')</script>";  
  }  
}   ?>

      <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
          <!-- Form -->
          <?php 
       include 'users.php';
       if($_POST['login']){  
        $username = $_POST['username'];  
        $password = $_POST['password'];  
        $user = $users->login($username, $password);  
        if ($user) {  
            // Registration Success  
           header("location:home.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
      } 
      

       ?>
          <form class="form-example" action="" method="post">
            <h1>Login</h1>
            
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
              <label for="password">Password:</label>
              <input
                type="password"
                class="form-control password"
                id="password"
                placeholder="Password"
                name="password"
              />
            </div>

            <button type="submit" class="btn btn-primary btn-customized mt-4">
              Login
            </button>
          </form>
          <!-- Form end -->
        </div>
      </div>
    