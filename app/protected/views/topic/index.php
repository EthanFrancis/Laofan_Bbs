<div class="locationDiv">
      <img src="images/nav.gif" align="absmiddle">老范论坛 &raquo; 最新话题
    </div>
    <!-- 最新话题 -->
    <div class="bbsMsg">
      <div class="topicDiv1 clear">
        <div class="topicDiv2" style="width:500px">话题</div>
        <div class="topicDiv2" style="width:100px">讨论区</div>
        <div class="topicDiv2" style="width:100px">作者</div>
        <div class="topicDiv2" style="width:200px">最后发表时间</div>
      </div>
      <?php foreach ($result as $v): ?>
        <div class="topicDiv1 clear">
        <div class="topicDiv3" style="width:500px"><a href="index.php?r=view/index/bbsId/<?php echo $v['bbsId'] ?>"><?php echo $v['title'] ?></a></div>
        <div class="topicDiv3" style="width:100px"><?php echo $v['typeName'] ?></div>
        <div class="topicDiv3" style="width:100px"><?php echo $v['userName'] ?></div>
        <div class="topicDiv3" style="width:200px"><?php echo $v['bbsTime'] ?></div>
      </div>
      <?php endforeach?>

    </div>
