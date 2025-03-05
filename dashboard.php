<?php
include './conn.php';
?>

<script src="./index.global.js"></script>

<h1 class="text-3xl text-blue-500 text-center my-9">Contect Info </h1>
<table class="table-auto border-collapse border border-gray-600 w-1/2 m-auto    ">
    <tr>
        <th class="border border-gray-600 p-2">Id</th>
        <th class="border border-gray-600 p-2">Name</th>
        <th class="border border-gray-600 p-2">Email</th>
        <th class="border border-gray-600 p-2">Message</th>
        <th class="border border-gray-600 p-2">Update</th>
        <th class="border border-gray-600 p-2">Delete</th>
    </tr>
<?php
$sql = "SELECT * FROM `tb1`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='border border-gray-600 p-2'>" . $row["id"] . "</td>";
        echo "<td class='border border-gray-600 p-2'>" . $row["name"] . "</td>";
        echo "<td class='border border-gray-600 p-2'>" . $row["email"] . "</td>";
        echo "<td class='border border-gray-600 p-2'>" . $row["message"] . "</td>";
        echo "<td class='border border-gray-600 p-2 text-center'> " . "<a class='bg-blue-500 py-2 px-5 text-white text-bold' href='update.php?id=" . $row["id"] . "'>" . "Update" . "</a></td>";
        echo "<td class='border border-gray-600 p-2'>" . "<a class='bg-red-500 py-2 px-5 text-white text-bold' href='delete.php?id=" . $row["id"] . "'>" . "Delete" . "</a>" . "</td>";
        echo "</tr>";
    }
}
else{
    echo "No Data Found";
}

?>
</table>