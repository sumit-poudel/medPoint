<?php include 'header.php' ?>

<?php
session_start();
if (isset($_POST['login'])) {
  $conn = new mysqli('localhost', 'root', '', 'medpointdb');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", "root", "", "medpointdb");
  $sql = "SELECT * from tbuser WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($password === $row['password']) {
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $row['fullname'];
      setcookie('username', $username, time() + (86400 * 30), "/");
      echo "<script>window.location.href = '/medpoint'</script>";
    } else {
      echo "<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('password').classList.add('border-red-500');
  });
</script>
";
    }
  } else {
    echo "<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('username').classList.add('border-red-500');
  });
</script>
";
  }
  mysqli_close($conn);
}
?>

<body>
  <section class=" w-screen h-screen flex justify-center items-center ">
    <div class="flex h-fit w-fit justify-center m-auto items-center shadow-lg rounded-2xl overflow-hidden ">
      <div class="w-fit p-4 flex flex-col justify-center items-center ">
        <img src="./public/med-logo.png" class="-rotate-15 aspect-auto max-w-30 " alt="logo">
        <h2 class="font-heading font-bold text-2xl text-main-black mt-4 ">Connect with us</h2>
        <p>MedPoint — Your Trusted Pharmacy, Online.</p>
      </div>
      <div class="p-4 border-l-2 border-main-gray ">
        <form action="" method="post" class="flex flex-col gap-1 justify-center items-center p-2 ">
          <h3 class="self-start font-heading font-bold text-lg text-main-black ">Login:</h3>
          <fieldset id="username" class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">UserName*</legend>
            <label for="username" class="flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="text" name="username" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <fieldset id="password" class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">password*</legend>
            <label for="password" class=" flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="password" name="password" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <button name="login" class="w-full bg-med-lime p-1 text-white font-semibold rounded-md ">login</button>
        </form>
        <hr class=" border-1 border-main-gray">
        <a href="/medpoint/create.php" class="w-full p-2 mt-2 font-semibold rounded-md bg-blue-500 text-white text-center inline-block ">create an account</a>
      </div>
    </div>
  </section>
</body>