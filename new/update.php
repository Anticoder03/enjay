<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Record</title>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <?php
    require_once 'function.php';

    if(isset($_POST['update'])){
        $id = intval($_GET['id']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['text'];

        $data = new Connection();
        $data->update_data($name, $email, $msg, $id);
        echo "<script>alert('Record Updated successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

    // Fetch existing record for pre-filling
    if (isset($_GET['id'])) {
        $data = new Connection();
        $result = $data->display_data();
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id'] == $_GET['id']) {
                $nameValue = htmlspecialchars($row['name']);
                $emailValue = htmlspecialchars($row['email']);
                $msgValue = htmlspecialchars($row['message']);
                break;
            }
        }
    }
    ?>

    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
        <h2 class="text-2xl font-semibold text-center mb-4">Update Record</h2>
        <form method="post" class="space-y-4">
            <div>
                <label for="name" class="block font-medium">Name:</label>
                <input type="text" name="name" id="name" value="<?= $nameValue ?? '' ?>" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block font-medium">Email:</label>
                <input type="email" name="email" id="email" value="<?= $emailValue ?? '' ?>" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="msg" class="block font-medium">Message:</label>
                <textarea name="text" id="msg" rows="4" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $msgValue ?? '' ?></textarea>
            </div>
            <input type="submit" name="update" value="Submit" 
                class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition cursor-pointer">
        </form>
    </div>

</body>
</html>
