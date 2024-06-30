<?php
include 'templates/header.php'
?>
<?php
//$user = 'select * from users';
//$result = $conn->query($user);
//echo "<pre>";
//print_r($result);
//echo"<pre>";
//print_r($result->fetch_assoc());
//die;

//$sql = "INSERT INTO `users`( `full_name`, `username`, `email`, `password`, `role_id`, `department_id`, `phone`, `address`, `dob`, `gender`, `status`) 
//VALUES ('samruddhi chavan','samu12','samu@gmail.com','2720','1','1','1243567689','kolhapur','2007/10/03','Female','1')";
 
 //if ($conn->query($sql)===TRUE)
 //{
   // echo "record inserted successfully";
 //}
 //else{
   // echo "record is not inseted";
 //}

  //$sql = "UPDATE users SET full_name='sanu' WHERE id='1'";
 // if($conn->query($sql)===TRUE)
  //{
    //echo "record upadated successfully";

 /// }
  //else{
    //echo "update is not updated";
  //}
  /* $username= $_POST['username'];
   $password= $_POST['password'];
   die;
   
  $user="SELECT * FROM 'users' WHERE
  'username'= '$username' AND 'password' = '$password' ";

  $result =$conn->query($user);
  echo "<pre>";
  print_r($result->fetch_assoc());*/

?>

<section class="hero-banner d-flex align-item center justify-content center">
    <div class="container-fluid text-center">
        <h1>Leave Management System</h1>
        <p>My First Project</p>
        <button type="button" class="btn btn-primary">
            <a class="text-white" href=Login.php>login
        </button>
</div>
</section>











<?php
include 'templates/footer.php'?>


