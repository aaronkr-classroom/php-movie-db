<?php

// movieDB �����ͺ��̽� ����
$conn = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB �����ͺ��̽� ���� ����!");

$title = $_POST['smovieTitle2'];

$sql = "SELECT * FROM MOVIE WHERE title='$title'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo "<script>alert('�˻��� ��ȭ ������ �����ϴ�.');location.replace('main.php');</script>";
    }
} else {
    $err = mysqli_error($conn);
    echo "<script>alert('SQL�� ������ȸ ����\n��������: $err');</script>";
}

$row = mysqli_fetch_array($result);
$id = $row['id'];
$title = $row['title'];
$genre = $row['genre'];
$date = $row['date'];
$price = $row['price'];
$poster = $row['poster'];

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>��ȭ ����</title>
</head>
<body>
    <!-- ��ȭ ���� ���� ȭ�� -->
    <div data-role="page" id="page2">
        <div data-role="header" data-position="fixed" data-theme="b">
            <a href="#" data-icon="back" data-rel="back">&larr; �ڷ� (Back)</a>
            <h1>��ȭ ���� ����</h1>
            <a href="main.php" data-icon="home" data-iconpos="notext" class="ui-btn-right">��ȭ ��� (Home)</a>
            <div data-role="navbar">
                <ul>
                    <li><a href="insert.php">�Է�</a></li>
                    <li><a href="update_select.php" class="ui-btn-active">����</a></li>
                    <li><a href="delete_select.php">����</a></li>
                    <li><a href="selectAll.php">��ü �˻�</a></li>
                </ul>
            </div>
        </div>

        <div data-role="content">
            <h3>��ȭ ���� ����</h3>
            <form name="form2" method="POST" enctype="multipart/form-data" action="update_result.php" data-ajax="false">
                <div class="ui-body ui-body-a">
                    <label>��ȭ��: </label>
                    <input type="text" name="title" id="title" value="<?php echo $title; ?>" data-mini="true" data-inline="true">
                    <label>�帣: </label>
                    <select name="genre" data-native-menu="false" data-mini="true" data-inline="true" id="genre">
                        <option value="<?php echo $genre; ?>"><?php echo $genre; ?></option>
                        <option value="�׼�">�׼�</option>
                        <option value="�ڹ̵�">�ڹ̵�</option>
                        <option value="�θǽ�">�θǽ�</option>
                        <option value="������">������</option>
                        <option value="SF">SF</option>
                        <option value="��Ÿ��">��Ÿ��</option>
                        <option value="����">����</option>
                        <option value="���">���</option>
                        <option value="��ť���͸�">��ť���͸�</option>
                        <option value="�ִϸ��̼�">�ִϸ��̼�</option>
                        <option value="��Ÿ">��Ÿ</option>
                    </select>
                    <label>�󿵳�¥ (yyyy-mm-dd): </label>
                    <input type="date" name="date" id="date" value="<?php echo $date; ?>" data-mini="true" data-inline="true">
                    <label>������: </label>
                    <input type="text" name="price" id="price" value="<?php echo $price; ?>" data-mini="true" data-inline="true">
                    <label>������: </label>
                    <input type="file" name="poster" id="poster" data-mini="true" data-inline="true">
                </div>
                <div class="ui-body">
                    <fieldset class="ui-grid-a">
                        <div class="ui-block-a">
                            <input type="submit" value="����" data-mini="true">
                        </div>
                        <div class="ui-block-b">
                            <input type="reset" value="���" data-mini="true">
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="b">
            <h4>&copy; 2024 Movie Web App</h4>
        </div>
    </div>
</body>
</html>