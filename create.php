<?php include 'header.php' ?>
<?php
session_start();
if (isset($_POST['submit'])) {
  $conn = new mysqli('localhost', 'root', '', 'medpointdb');
  $username = $_POST['username'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $conn = new mysqli("localhost", "root", "", "medpointdb");
  if ($password !== $confirmpassword) {
    echo "Password and Confirm Password do not match";
  } else {
    $sql = "INSERT INTO tbuser (username, fullname, password) VALUES ('$username', '$fullname', '$password')";
    if (mysqli_query($conn, $sql)) {
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $fullname;
      echo "<script>window.location.href = '/medpoint'</script>";
    } else {
      echo "Error creating account";
    }
  }
  mysqli_close($conn);
}
?>

<!-- form body -->

<body>
  <section class=" w-screen h-screen flex flex-col justify-center items-center ">
    <div class="flex h-fit w-fit justify-center m-auto items-center shadow-lg rounded-2xl overflow-hidden ">
      <div class="w-fit p-4 flex flex-col justify-center items-center ">
        <img src="./public/med-logo.png" class="-rotate-15 aspect-auto max-w-30 " alt="logo">
        <h2 class="font-heading font-bold text-2xl text-main-black mt-4 ">Connect with us</h2>
        <p>MedPoint — Your Trusted Pharmacy, Online.</p>
      </div>
      <div class="p-4 border-l-2 border-main-gray ">
        <form action="" method="post" class="flex flex-col gap-1 justify-center items-center p-2 ">
          <h3 class="self-start font-heading font-bold text-lg text-main-black ">Login:</h3>
          <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">UserName*</legend>
            <label for="name" class=" flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="text" name="username" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">FullName*</legend>
            <label for="name" class=" flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="text" name="fullname" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">Password*</legend>
            <label for="name" class=" flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="password" name="password" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <fieldset class="rounded-lg border-main-gray h-15 pl-3 border-2">
            <legend class="text-main-black ml-2 font-heading font-semibold ">ConfirmPassword*</legend>
            <label for="name" class=" flex text-main-gray items-center gap-1.5">
              <img src="./public/person.svg" class="h-4 w-4" alt="person icon" /> |
              <input type="password" name="confirmpassword" class=" w-full focus:outline-0 font-semibold focus:text-main-black placeholder-main-gray placeholder:font-heading placeholder:font-semibold " required placeholder="Enter your name" />
            </label>
          </fieldset>
          <hr class=" border-1 border-main-gray">
          <button
            type="submit"
            name="submit"
            class="w-full hover:cursor-pointer p-2 mt-2 font-semibold rounded-md bg-blue-500 text-white text-center ">
            create an account
          </button>
        </form>
      </div>
    </div>
  </section>