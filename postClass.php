<?php
class Post  
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

    // Save/ Add New Post
    public function add() {
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