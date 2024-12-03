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
    <div data-role="page" id="page1">
        <div data-role="header" data-position="fixed" data-theme="b">
            <a href="#" data-icon="back" data-rel="back">&larr; �ڷ� (Back)</a>
            <h1>��ȭ ���� �Է�</h1>
            <a href="main.php" data-icon="home" data-iconpos="notext" class="ui-btn-right">��ȭ ��� (Home)</a>

            <div data-role="navbar">
                <ul>
                    <li><a href="insert.php" class="ui-btn-active">�Է�</a></li>
                    <li><a href="update_select.php">����</a></li>
                    <li><a href="delete_select.php">����</a></li>
                    <li><a href="selectAll.php">��ü �˻�</a></li>
                </ul>
            </div>
        </div>

        <div data-role="content">
            <form name="form1" method="POST" enctype="multipart/form-data" action="insert_result.php" data-ajax="false">
                <h3>��ȭ ���� �Է�</h3>    
                <div class="ui-body ui-body-a">
                    <label>�帣: </label>
                    <select name="genre" data-native-menu="false" data-mini="true" data-inline="true" id="genre">
                        <option value="����">����</option>
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
                    <label>��ȭ��: </label>
                    <input type="text" name="title" id="title" data-mini="true" data-inline="true">
                    <label>�󿵳�¥ (yyyy-mm-dd): </label>
                    <input type="date" name="date" id="date" data-mini="true" data-inline="true">
                    <label>������: </label>
                    <input type="text" name="price" id="price" data-mini="true" data-inline="true">
                    <label>������: </label>
                    <input type="file" name="poster" id="poster" data-mini="true" data-inline="true">
                </div>

                <div class="ui-body">
                    <fieldset class="ui-grid-a">
                        <div class="ui-block-a">
                            <input type="reset" value="���" data-mini="true">
                        </div>
                        <div class="ui-block-b">
                            <input type="submit" value="�߰�" data-mini="true">
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