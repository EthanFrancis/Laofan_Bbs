<script type="text/javascript">
  function changeImg(imgName){
    $("#headPic").attr('src','images/user/'+imgName+'.gif');
  }
  $(document).ready(function() {
    $(".regDiv2>input[name='password']").focus();
    $(".regDiv2>input[name='password']").blur(function() {
      var pwd=$(this).val();
      if (pwd==='') {
        $('#check1').text="未修改密码";
        $pwd='<?php echo $userInfo['password'] ?>';
      };
    });
  });
</script>
<div class="locationDiv">
      <img src="images/nav.gif" align="absmiddle">老范论坛 &raquo; 个人资料
    </div>
    <!-- 会员注册表格 -->
    <form name="frm" method="post" action="index.php?r=user/update/userId/<?php echo $userInfo['userId'] ?>">
    <div class="bbsDiv">
      <div class="bbsTypeRemarkDiv1">以下资料可修改</div>
      <div class="regDiv4">
        -----------------------------------------------下列为必填项
      </div>
      <div class="regDiv">
        <div class="regDiv1">用户名：</div>
        <div class="regDiv2"><input type="text" name="userName" size="20" value="<?php echo $userInfo['userName'] ?>" readOnly="readOnly"></div>
      </div>
      <div class="regDiv">
        <div class="regDiv1">密码：</div>
        <div class="regDiv2">
          <input type="password" name="password" size="20"><span id="check1"></span>
        </div>
      </div>
      <div class="regDiv">
        <div class="regDiv1">确认密码：</div>
        <div class="regDiv2">
          <input type="password" name="checkPwd" size="20"><span id="check2"></span>
        </div>
      </div>
      <div class="regDiv">
        <div class="regDiv1" >电子邮件：</div>
        <div class="regDiv2"><input type="text" name="mailBox" size="50" value="<?php echo $userInfo['mailBox'] ?>"></div>
      </div>
      <div class="regDiv">
        <div class="regDiv1">用户性别：</div>
        <div class="regDiv2">
        <?php if ($userInfo['sex'] == '男'): ?>
          <input type="radio" name="sex" value="男" checked='checked'>先生
          <input type="radio" name="sex" value="女">女士
        <?php else: ?>
          <input type="radio" name="sex" value="男" checked>先生
          <input type="radio" name="sex" value="女" checked='checked'>女士
        <?php endif?>

        </div>
      </div>
      <div class="regDiv4">
        -----------------------------------------------下列为选填项
      </div>
      <div class="regDiv">
        <div class="regDiv1" >联系电话：</div>
        <div class="regDiv2"><input type="text" name="tel" size="50" value="<?php echo $userInfo['tel'] ?>"></div>
      </div>
      <div class="regDiv">
        <div class="regDiv1" >联系地址：</div>
        <div class="regDiv2"><input type="text" name="address" size="50" value="<?php echo $userInfo['address'] ?>"></div>
      </div>
      <div class="regDiv">
        <div class="regDiv1" >QQ号码：</div>
        <div class="regDiv2"><input type="text" name="qq" size="50" value="<?php echo $userInfo['qq'] ?>"></div>
      </div>
      <div class="regDiv">
        <div class="regDiv11" >用户签名：</div>
        <div class="regDiv21"><textarea name="signWord" cols="50" rows="5" value="<?php echo $userInfo['signWord'] ?>"></textarea></div>
      </div>
      <div class="regDiv3">
        <input type="submit" value="修改">
        &nbsp;&nbsp;&nbsp;
        <input type="reset" value="全部重写">
      </div>
      <div class="headImgDiv">
        <div><img id="headPic" src="images/user/<?php echo (int) $userInfo['headPic'] ?>.gif" width="100" height="80"></div>
        <div>
          <select name="headPic" onchange="changeImg(this.value)">
            <option value="1">无</option>
            <option value="2">鹦鹉</option>
            <option value="3">男孩</option>
            <option value="4">老虎</option>
            <option value="5">企鹅</option>
            <option value="6">Dog</option>
            <option value="7">小狗</option>
            <option value="8">Boy</option>
            <option value="9">小飞象</option>
            <option value="10">大象</option>
            <option value="11">鱼</option>
            <option value="12">笑脸</option>
            <option value="13">清洁工</option>
            <option value="14">Mick</option>
            <option value="15">米老鼠</option>
            <option value="16">熊</option>
            <option value="17">战士</option>
          </select>
        </div>
      </div>
    </div>
    </form>
<script type="text/javascript">
  document.frm.headImg.value="<?php echo $userInfo['headPic'] ?>"
</script>
