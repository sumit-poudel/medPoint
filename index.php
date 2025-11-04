<?php include 'header.php'; ?>

<body>
  <?php include 'navbar.php'; ?>
  <section class="flex justify-around pl-5 h-10 items-center ">
    <button type="options">pain relief</button>
    <button type="options">cold and flu</button>
    <button type="options">diabetes care</button>
    <button type="options">digestive health</button>
  </section>
  <main class=" m-4 h-fit flex flex-col items-center">
    <div id="searchResult"></div>
    <?php include 'items.php'; ?>
  </main>
  <?php include 'footer.php'; ?>