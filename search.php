<?php

$conn = new mysqli("localhost", "root", "", "medpointdb");
if ($conn->connect_error) {
    die("Connection failed: ");
}
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    $sql = "SELECT * FROM tbproduct WHERE name LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='grid mb-4 gap-6 grid-cols-1 xl:grid-cols-4 sm:grid-cols-2'>
    <h1 class='font-semibold text-xl col-span-full'>search result..</h1>";
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='flex bg-white rounded-md flex-col w-[13rem] items-start shadow-lg '>
    <img src=" . $row["image_path"] . " class='p-4 transition-all ease-in-out grayscale hover:grayscale-0 aspect-square w-full border-b-2 border-bdr-ash' alt='item'> 
    <div class='p-4 flex flex-col gap-2'>
    <p>" . $row["name"] . "</p>
    <em>" . $row["stock"] . " left</em>
    <strong>$ " . $row["price"] . "</strong>
    <button id=" . $row['id'] . " class='text-white font-semibold hover:cursor-pointer active:bg-med-drklime bg-med-lime p-1 rounded-full w-[10rem] ' >Add to cart</button>
    </div>
    </div>";
        }
        echo "</div>";
    } else {
        echo "0 results";
    }
}
