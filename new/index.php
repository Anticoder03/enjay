<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Display Records</title>
</head>
<body class="bg-gray-100 flex flex-col items-center py-10">

    <a href="insert.php" class="mb-5 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
        Add New Record
    </a>

    <div class="overflow-x-auto w-full max-w-4xl bg-white shadow-lg rounded-lg p-6">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Id</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Message</th>
                    <th class="border border-gray-300 px-4 py-2">Update</th>
                    <th class="border border-gray-300 px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'function.php';
                $data = new Connection();
                $sql = $data->display_data();
                $count = 1;
                while ($row = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr class="text-center hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2"><?php echo $count ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row['name']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row['email']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row['message']) ?></td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="update.php?id=<?php echo $row['id'] ?>" class="text-blue-500 hover:underline">Update</a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
