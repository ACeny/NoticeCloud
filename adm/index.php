<?php
header("Content-type: text/html; charset=gb2312");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<title>NoticeCloud</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="https://www.layuicdn.com/layui/css/layui.css" media="all">
<link rel="stylesheet" href="https://www.layui.com/admin/pro/dist/style/admin.css" media="all">
<link rel="stylesheet" href="https://www.layui.com/admin/pro/dist/style/login.css" media="all">
</head>
<body>
<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
<div class="layadmin-user-login-main">
<div class="layadmin-user-login-box layadmin-user-login-header">
<h2>NoticeCloud</h2>
<p>PowerByXAC</p>
<?php 
$txt = $_POST["n"];
switch ($txt) {
    case '':
        break;
    default:
        $file = fopen("../notice.php", "w") or die("Unable to open file!");
        fwrite($file, "<?php\nheader(\"Content-type: text/html; charset=gb2312\");\n?>");
        fwrite($file, $txt);
        fclose($file);
        echo "<p>The modification announcement as ";
        echo $txt;
        echo " succeeded</p>";
}
?>
      </div>
	  <form action="./index.php" method="post">
      <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-note"></label>
          <input type="text" name="n" placeholder="" class="layui-input">
        </div>
        <div class="layui-form-item">
		  <input class="layui-btn layui-btn-fluid" type="submit" value="Submit!">
        </div>
      </div>
	  </form>
    </div>
    
    <div class="layui-trans layadmin-user-login-footer">
      <p>Power By<a href="https://github.com/ACeny/NoticeCloud">NoticeCloud</a></p>
    </div>

  </div>

</body>
</html>