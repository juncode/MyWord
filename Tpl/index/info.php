<?php
defined( 'MyEngine' ) or exit( 'Error: Access Denied!' );
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="Public/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" >
    </head>
    <body>
        <div>
            <form id="submit">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2"> 歡迎使用本系統，請先設置網站信息</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 網站名稱：</td><td><input class="form-control" name="sys_name" type="text"></td>
                        </tr>
                        <tr>
                            <td>網站主題：</td><td><input class="form-control" name="sys_theme" type="text"></td>
                        </tr>
                        <tr>
                            <td>創建人：</td><td><input class="form-control" name="sys_creator" type="text"></td>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit" class="btn btn-primary" value="提交">&nbsp;&nbsp;&nbsp;<input class="btn btn-warning" type="reset"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </body>
    <script type="text/javascript" src="Public/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="Public/bootstrap/js/bootstrap.js"></script>  
    <script type="text/javascript" src="Public/js/index/info.js"></script>
</html>

