<?php
class User  
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db ="blogdb";
    private $conn;

    public function __construct(){
        try {
            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }

    }

    public function register() {
        if(isset($_POST['signup'])) {
            if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])  ) {
                if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])  ) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $query ="INSERT INTO user_tbl (username, email, password) VALUES ('$username', '$email', '$password')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }

                }else{
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                
                }

            }
        }
    }
 
    public function login($username, $password){  
        $res = mysql_query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");  
        $user_data = mysql_fetch_array($res);  
        //print_r($user_data);  
        $no_rows = mysql_num_rows($res);  
          
        if ($no_rows == 1)   
        {  
       
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $user_data['id'];  
            $_SESSION['username'] = $user_data['username'];  
            $_SESSION['password'] = $user_data['password'];  
            return TRUE;  
        }  
        else  
        {  
            return FALSE;  
        }  
    } 


    // Save/ Add New Post
    public function post() {
        if(isset($_POST['save'])) {
            if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) ) {
                if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category']) ) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                 //   $img = $_POST['image'];
                    $category = $_POST['category'];
                //   $status = $_POST['status'];



                    $query ="INSERT INTO post_tbl (title, content,post_category) VALUES ('$title', '$content',  '$category')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('records added successfully');</script>";
                       // echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                     //   echo "<script>window.location.href = 'index.php';</script>";
                    }

                }else{
                    echo "<script>alert('empty');</script>";
                  //  echo "<script>window.location.href = 'index.php';</script>";
                
                }

            }
        }
    }

}
?>