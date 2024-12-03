<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- �������� ����� ���̺귯�� �߰� -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Movie Web App</title>
</head>
<body>
    <!-- ���� �޴� ȭ�� -->
    <div data-role="page" id="page0">
        <div data-role="header" data-position="fixed" data-theme="b">
            <h1>��ȭ ���� ����</h1>
            <a href="#page0" data-icon="home" data-iconpos="notext" class="ui-btn-right">��ȭ ��� (Home)</a>
        </div>

        <div data-role="content">
            <img style="margin: 20px auto; display: block;" src="cinema.jpg" />
            <ul data-role="listview" data-inset="true">
                <li><a href="insert.php">��ȭ ���� �߰�</a></li>
                <li><a href="update_select.php">��ȭ ���� ����</a></li>
                <li><a href="delete_select.php">��ȭ ���� ����</a></li>
                <li><a href="selectAll.php">��ü ��ȭ ��ȸ</a></li>
            </ul>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="b">
            <h4>&copy; 2024 Movie Web App</h4>
        </div>
    </div>
</body>
</html>