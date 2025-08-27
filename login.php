<?php include 'header.php' ?>

<body>
  <section class="flex justify-center items-center h-100 rounded ">
    <div class="flex justify-center items-center border-main-gray border-2 rounded-2xl overflow-hidden ">
      <div class="w-40 h-80 bg-gray-500 ">

      </div>
      <form action="post" class="flex flex-col gap-1 justify-center items-center p-2 ">
        <h3 class="self-start font-heading font-bold text-lg text-main-black ">Login:</h3>
        <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
          <legend class="text-main-black ml-2 font-heading font-semibold ">Name*</legend>
          <label for="name" class=" flex text-main-gray items-center gap-1.5">
            <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
            <input type="text" id="name" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
          </label>
        </fieldset>
        <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
          <legend class="text-main-black ml-2 font-heading font-semibold ">password*</legend>
          <label for="name" class=" flex text-main-gray items-center gap-1.5">
            <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
            <input type="text" id="name" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
          </label>
        </fieldset>
        <button>login</button>
      </form>
    </div>
  </section>
  <?php include 'footer.php' ?>