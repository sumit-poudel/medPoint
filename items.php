<div class="grid gap-6 grid-cols-1 xl:grid-cols-4 sm:grid-cols-2 ">
    <h1 class=" font-semibold text-xl col-span-full">Just for you...</h1>
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<div class='flex flex-col w-[15rem] items-start shadow-md '>
    <img src='public/person.svg' class='aspect-square w-full border-b-2 border-bdr-ash' alt='item'> 
    <div class='p-4 flex flex-col gap-2'>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis amet illo sunt </p>
    <strong>$ 1000</strong>
    <button class=' bg-yellow-300 p-1 text-black rounded-full w-[10rem] ' >Add to cart</button>
    </div>
    </div>";
    }
    ?>
</div>