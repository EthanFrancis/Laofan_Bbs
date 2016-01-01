<div class="locationDiv">
      <img src="images/nav.gif" align="absmiddle">老范论坛 &raquo; 搜索话题
    </div>
    <!-- 搜索框 -->
    <form name="frm" method="post" action="index.php?r=search/search">
    <div class="bbsDiv">
      <div class="bbsTypeRemarkDiv1">文章搜索</div>
      <div style="height:30px;">
        <div class="searchDiv1">
          &nbsp;搜索类型：
          <select name="searchType">
            <option value="title">标题</option>
            <option value="content">内容</option>
          </select>
          &nbsp;关键字：<input type="text" name="keyword" size="30">
          <input type="submit" value="Search">
        </div>
      </div>
    </div>
    </form>
    <!-- 最新话题 -->
    <div class="bbsMsg">
      <div class="topicDiv1 clear">
        <div class="topicDiv2" style="width:500px">话题</div>
        <div class="topicDiv2" style="width:100px">讨论区</div>
        <div class="topicDiv2" style="width:100px">作者</div>
        <div class="topicDiv2" style="width:200px">最后发表时间</div>
      </div>
      <div class="topicDiv1 clear">
      <?php if ($result != NULL): ?>
        <div class="topicDiv3" style="width:500px"><a href="index.php?r=view/index/bbsId/<?php echo $result['bbsId'] ?>"><?php echo $result['title'] ?></a></div>
          <div class="topicDiv3" style="width:100px"><?php echo $result['typeName'] ?></div>
          <div class="topicDiv3" style="width:100px"><?php echo $result['userName'] ?></div>
          <div class="topicDiv3" style="width:200px"><?php echo $result['bbsTime'] ?></div>
      <?php endif?>
      </div>
    </div>

