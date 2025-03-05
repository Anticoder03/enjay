<script src="./index.global.js"></script>

<?php
include './conn.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `tb1` WHERE `tb1`.`id` = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "sorry we can not find the data";
}
else{
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $msg = $row['message'];
    ?>
    <form  method="post" class="w-1/2 m-auto mt-20  ">
        <div class="mb-4">
            <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name"
                class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition" value="<?php echo $name ?>">
        </div>

        <div class="mb-4">  
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email"
                class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition" value="<?php echo $email ?>">
        </div>

        <div class="mb-4">
            <label for="msg" class="block text-lg font-medium text-gray-700">Message</label>
            <textarea name="text" id="msg" placeholder="Write your message..."
                class="w-full p-3 border-2 border-gray-300 rounded-md resize-none h-32 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"><?php echo $msg ?></textarea>
        </div>

        <button type="submit"
            class="w-1/4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-md text-lg transition duration-300">   
            Submit
        </button>
    </form>
    <?php
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];
    if (empty($name) || empty($email) || empty($msg)){
        echo "<script>alert('Please fill all the fields')</script>";
    }else{
        $sql = "UPDATE `tb1` SET `name` = '$name', `email` = '$email', `message` = '$msg' WHERE `tb1`.`id` = $id;";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Message sent successfully!')</script>";
            header("Location: dashboard.php");
        }
    }
}
?>