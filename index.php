<?php include 'header.php'; ?>

<body>
  <header class=" w-full py-2 flex items-center justify-around border-b-bdr-ash border-b-2 ">
    <img src="./public/med-logo.png" class="h-8" alt="medpoint logo">
    <section class="flex items-center rounded-md border-2 border-r-0 h-10 p-0.5 pl-2 border-bdr-ash overflow-visible ">
      <label for="search">Search |</label>
      <input type="text" id="search" placeholder="search" value="" class=" focus:outlime-0 pl-1 h-10 text-txt-ash">
      <button type="search" class=" hover:cursor-pointer active:bg-med-drklime rounded-md w-10.75 h-10.75 flex justify-center items-center  bg-med-lime text-white font-extrabold  ">
        <img class="h-4 w-4 " src="./public/search.svg" alt="search">
      </button>
    </section>
    <section>
      <a href="./login.php">
        <div class="flex items-center px-2 h-10 gap-1 border-2 rounded-md border-bdr-ash active:bg-txt-ash active:text-white ">
          login
          <img class="h-7 w-7" src="./public/login-svg.svg" alt="login">
        </div>
      </a>
    </section>
  </header>
  <nav class="flex justify-around pl-5 h-10 items-center ">
    <button type="options">pain relief</button>
    <button type="options">cold and flu</button>
    <button type="options">diabetes care</button>
    <button type="options">digestive health</button>
  </nav>
  <main class=" flex h-40 justify-center items-center ">
    <h3>
      to be continue...
    </h3>
  </main>
  <?php include 'footer.php'; ?>