<?php

// movieDB �����ͺ��̽� ����
$conn = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB �����ͺ��̽� ���� ����!");

$title = $_POST['stitle'];

$sql = "SELECT * FROM MOVIE WHERE title='$title'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
unlink($row['poster']);

$sql = "DELETE FROM MOVIE WHERE title='$title'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('$title' ���� ���� ����!);</script>";
} else {
    $err = mysqli_error($conn);
    echo "<script>alert('SQL�� ���� ���� ���� \\n���� ����: $err');</script>";
}

mysqli_close($conn);

echo "<script>location.href='main.php';</script>"; // p. 512 edit

?>