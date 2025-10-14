<?php include 'header.php' ?>

<body>
  <section class=" w-screen my-20 ">
    <div class="flex h-fit w-fit justify-center m-auto items-center shadow-lg rounded-2xl overflow-hidden ">
      <div class="w-fit p-4 flex flex-col justify-center items-center ">
    <img src="./public/med-logo.png" class="-rotate-15 aspect-auto max-w-30 " alt="logo">
    <h2 class="font-heading font-bold text-2xl text-main-black mt-4 ">Connect with us</h2>
    <p>MedPoint — Your Trusted Pharmacy, Online.</p>
      </div>
      <div class="p-4 border-l-2 border-main-gray ">
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
          <button class="w-full bg-med-lime p-1 text-white font-semibold rounded-md " >login</button>
        </form>
          <a class="w-full p-1 font-semibold text-center inline-block " >forgot password?</a>
          <hr class=" border-1 border-main-gray" >
          <a class="w-full p-2 mt-2 font-semibold rounded-md bg-blue-500 text-white text-center inline-block " >create an account</a>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>