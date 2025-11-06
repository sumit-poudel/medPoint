<!-- normal data showw -->
<div class="grid gap-6 grid-cols-1 xl:grid-cols-4 sm:grid-cols-2 ">

    <?php
    $conn = new mysqli("localhost", "root", "", "medpointdb");
    if ($conn->connect_error) {
        die("Connection failed: ");
    }
    $sql = "SELECT * FROM tbproduct";
    $data = [];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $category = $row["category"];
            $data["$category"][] = $row;
        }
        // data becomes this structure
        //         $data = [
        //   "category" => [
        //     [ "id" => 1, "name" => "Paracetamol" ],
        //     [ "id" => 2, "name" => "Amoxicillin" ]
        //   ],
        //   "category2" => [
        //     [ "id" => 3, "name" => "medss" ]
        //   ]
        // ];

        foreach ($data as $category => $items) {
            echo "<h1 class='font-semibold text-xl col-span-full'>" . $category . "</h1>";
            foreach ($items as $item) {
                echo "<div class='flex bg-white rounded-md flex-col w-[10rem] items-start shadow-lg '>
    <img src=" . $item["image_path"] . " class='p-4 transition-all ease-in-out grayscale hover:grayscale-0 aspect-square w-full border-b-2 border-bdr-ash' alt='item'> 
    <div class='p-4 h-25 overflow-hidden flex flex-col gap-2'>
    <strong>$ " . $item["price"] . "</strong>
    <p>" . $item["name"] . "</p>
    </div>
    <button id=" . $item['id'] . " class='m-4 p-1 text-white font-semibold hover:cursor-pointer active:bg-med-drklime bg-med-lime rounded-full w-[8rem] ' >Add to cart</button>
    </div>";
            }
        }
        mysqli_close($conn);
    } else {
        echo "0 results";
    }
    ?>
</div>