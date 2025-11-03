<div class="grid gap-6 grid-cols-1 xl:grid-cols-4 sm:grid-cols-2 ">
    <h1 class=" font-semibold text-xl col-span-full">Just for you...</h1>
    <?php

    $conn = new mysqli("localhost", "root", "", "medpointdb");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM tbproduct";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div id=" . $row["id"] . " class='flex bg-white rounded-md flex-col w-[13rem] items-start shadow-lg '>
    <img src=" . $row["image_path"] . " class='p-2 grayscale hover:grayscale-0 aspect-square w-full border-b-2 border-bdr-ash' alt='item'> 
    <div class='p-4 flex flex-col gap-2'>
    <p>" . $row["name"] . "</p>
    <strong>$ " . $row["price"] . "</strong>
    <button class=' hover:cursor-pointer bg-yellow-300 p-1 text-black rounded-full w-[10rem] ' >Add to cart</button>
    </div>
    </div>";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>