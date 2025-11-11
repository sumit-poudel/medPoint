<?php
$conn = new mysqli('localhost', 'root', '', 'medpointdb');

if (isset($_GET['id']) && isset($_GET['user'])) {
    $user = $_GET['user'];
    $id = $_GET['id'];

    $sql = "SELECT * FROM tbcart WHERE username = '$user' AND pid = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'] + 1;

        $sql = "UPDATE tbcart SET count = $count WHERE username = '$user' AND pid = $id";
        mysqli_query($conn, $sql);

        echo "<script>window.location.href = '/medpoint'</script>";
    } else {
        $sql = "INSERT INTO tbcart (username, pid, count) VALUES ('$user', $id, 1)";
        mysqli_query($conn, $sql);

        echo "<script>window.location.href = '/medpoint'</script>";
    }
} else {
    echo "<script>alert('login first');</script>";
}
?>
