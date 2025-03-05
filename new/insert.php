<?php
require_once 'function.php';
$data = new Connection();
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];

    $result = $data->insert_data($name,$email,$msg);
    if($result){
        echo "<script>alert('Message sent successfully!')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }
    else{
        echo "<script>alert('Something went wrong. Please try again')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }
}

?>

<form method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="msg">Message:</label>
        <textarea name="text" id="msg"></textarea>
    </div>
    <input type="submit" name="insert" value="Submit">
</form>