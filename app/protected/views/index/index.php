 <div class="locationDiv">
    <img src="images/nav.gif" align="absmiddle">老范论坛 &raquo; 论坛首页
  </div>
    <!-- 公告 -->
  <div class="noticeDiv clear">
    <div class="noticeDiv1">公告：</div>
    <div class="noticeDiv2"><marquee><?php echo $notices['content'] ?></marquee></div>
  </div>

  <!-- 讨论区名称/描述 -->
  <div class="bbsTypeRemarkDiv">
    <div class="bbsTypeRemarkDiv1">讨论区名称/描述</div>
    <?php foreach ($bbsType as $bt): ?>
    <div class="bbsTypeRemarkDiv2">
      <div class="bbsTypeRemarkDiv3"><?php echo $bt['typeName'] ?></div>
      <div class="bbsTypeRemarkDiv4"><?php echo $bt['remark'] ?></div>
    </div>
    <?php endforeach?>
  </div>

  <!-- 讨论信息 -->
  <div class="bbsMsg">
    <div class="bbsTypeRemarkDiv1">讨论信息</div>
    <div class="bbsMsg1 clear">
      <div class="bbsMsg2"><img src="images/user.gif" width="50" height="60"></div>
      <div class="bbsMsg3">
        &nbsp;话题总数：<?php echo $bbsCount ?>&nbsp;&nbsp;&nbsp;回帖总数：<?php echo $revCount ?>&nbsp;&nbsp;&nbsp;会员总数：<?php echo $userCount ?><br>
      </div>
    </div>
  </div>
