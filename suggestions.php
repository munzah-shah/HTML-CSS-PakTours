<?php 

    $con = mysqli_connect('localhost','root');
    
    if($con){
        echo "Connection successful";
    }
    else {
        echo "No Connection";
    }

    mysqli_select_db($con, 'paktourssuggestions'); 

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $review = $_POST['comments'];
        
        $query = " INSERT INTO usersuggestions (Name, Email, Review)
        values ('$name', '$email', '$review') ";
    }

    mysqli_query($con, $query);

    header('location:index.php');
    
?>