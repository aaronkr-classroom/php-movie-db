<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Movie Web App</title>
</head>
<body>
    <!-- ��ȭ ���� �߰� ȭ�� -->
    <div data-role="page" id="page2">
        <div data-role="header" data-theme="b">
            <h1>��ȭ �˻�</h1>
        </div>

        <div data-role="content">
            <form name="form2" method="POST" action="update.php" data-ajax="false">
                <h3>������ ��ȭ �˻�</h3>
                <div class="ui-body ui-body-a">
                    <label>��ȭ��: </label>
                    <input type="search" name="stitle" id="stitle" data-mini="true" data-inline="true">
                </div>

                <input type="submit" value="�˻�" data-mini="true">
                <input type="reset" value="���" data-mini="true">
            </form>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="b">
            <h4>&copy; 2024 Movie Web App</h4>
        </div>
    </div>
</body>
</html>