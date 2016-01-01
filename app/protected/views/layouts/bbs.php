<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title><?php echo $this->pageTitle ?></title>
  <link rel="stylesheet" type="text/css" href="css/layouts.css">
  <script type="text/javascript" src="assets/jquery/jquery-1.11.3.js"></script>
  <script type="text/javascript">
  function logout () {
    if (confirm("确认退出?")) {
      window.location = "index.php?r=reaction/index/act/logout/rst/0";
    };
  }
  </script>
</head>
<body>
<!-- 网站头部开始 -->
  <div class="headDiv">
      <div class="logoDiv"><img src="images/head.gif"></div>
      <div class="menuDiv">
        <a href="index.php?r=index/index">论坛首页</a> |
        <a href="index.php?r=topic/index">最新话题</a> |
        <?php session_start()?>
        <?php if ($_SESSION['userMsg'] != NULL): ?>
          <a href="index.php?r=post/index">发表新话题</a> |
        <?php endif?>
        <a href="index.php?r=search/index">搜索</a> |
        <?php if ($_SESSION['userMsg'] === NULL): ?>
          <a href="index.php?r=reg/index">注册</a> |
          <a href="index.php?r=login/index">会员登陆</a> |
        <?php else: ?>
          <a href="index.php?r=user/index">个人资料</a> |
          <a href="#" onclick="logout()">注销</a> |
        <?php endif?>
        <a href="index.php?r=help/index">说明</a>
      </div>
    </div>
<!-- 网站头部结束 -->
<!-- content开始 -->
  <?php echo $content; ?>
<!-- content结束 -->
<!-- 网站footer开始 -->
    <div class="footerDiv">本网站由老范技术公司提供技术支持<br>版权所有 &copy; LaoFan 2015 AllRight</div>
<!-- 网站footer结束 -->
</body>
</html>
