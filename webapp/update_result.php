<?php

// movieDB �����ͺ��̽� ����
$conn = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB �����ͺ��̽� ���� ����!");

if(isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['date']) && isset($_POST['price'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $file = $_FILES['poster'];

    // New code
    $upload_dir = './uploads/';
    $upload_file = $upload_dir . basename($file['name']);

    if(move_uploaded_file($file['tmp_name'], $upload_file)) {
        $sql = "UPDATE MOVIE SET title='$title', genre='$genre', date='$date', price='$price', poster='$upload_file' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('$title' ���� ���� ����!);</script>";
        } else {
            echo "<script>alert('SQL�� ���� ���� ���� \\n���� ����: $err_msg');</script>";
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