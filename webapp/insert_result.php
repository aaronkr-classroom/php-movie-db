<?php
// movieDB �����ͺ��̽� ����
$conn = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB �����ͺ��̽� ���� ����!");

$title = $_POST['title'];
$genre = $_POST['genre'];
$date = $_POST['date'];
$price = $_POST['price'];
$file = $_FILES['poster'];

$upload_dir = './uploads/';
$upload_file = $upload_dir . basename($file['name']);

if(isset($FILES['poster'])) {
    if(move_uploaded_file($file['tmp_name'], $upload_file)) {
        $sql = "INSERT INTO MOVIE(id, title, genre, date, price, poster)
            VALUES (null, '$title', '$genre', '$date', '$price', '$file')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('$title' ���� �߰� ����!);</script>";
        } else {
            echo "<script>alert('SQL�� ���� �߰� ���� \\n���� ����: $err_msg');</script>";
        }
    } else {
        echo "<script>alert('���� ���ε� ����!');</script>";
    }
} else {
    echo "<script>alert('���� ���ε� ���� �߻�!');</script>";
}

mysqli_close($conn);

echo "<script>location.href='main.php';</script>"; // p. 512 edit
?>