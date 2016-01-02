<script type="text/javascript" src="assets/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="assets/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
  function delArtical (bbsId) {
    if (confirm("确认删除话题?")) {
      window.location.href="index.php?r=view/delete/bbsId/"+bbsId;
    };
  }
  function delReview (reId) {
    if (confirm("确认删除评论?")) {
      window.location.href="index.php?r=view/delReview/reId/"+reId+"/bbsId/<?php echo $viewInfo['bbsId'] ?>";
    };
  }
</script>
<div class="locationDiv">
      <img src="images/nav.gif" align="absmiddle">老范论坛 &raquo; 查看话题
    </div>
    <!-- 所有话题表格 -->
    <div class="bbsDiv">
      <div class="viewDiv">
        <div class="viewDiv1">作者</div>
        <div class="viewDiv2">此文章共有 <?php echo $revCount ?> 篇回帖</div>
      </div>
      <div class="viewDiv3">
        <div class="viewDiv4">
          &nbsp;<?php echo $viewInfo['userName'] ?>（楼主）<br>
          <img src="images/user/4.gif" width="100" height="100"><br><br>
         注册日期：<?php echo $viewInfo['regTime'] ?>
        </div>
        <div class="viewDiv5">
          <div class="viewDiv51">
            <div class="viewDiv511">文章心情：<img src="images/face/<?php echo $viewInfo['face'] ?>.jpg"></div>
            <?php if ($_SESSION['userMsg']['userName'] === $viewInfo['userName']): ?>
              <div class="viewDiv512">
              <a href="index.php?r=view/edit/bbsId/<?php echo $viewInfo['bbsId'] ?>"><img src="images/edit.gif"></a>
              &nbsp;&nbsp;
              <a href="#" onclick="delArtical(<?php echo $viewInfo['bbsId'] ?>)"><img src="images/delete.gif"></a>
            </div>
            <?php endif?>
          </div>
          <div><hr width="100%"></div>
          <div>
            <font style="font:bold 19px/20px arial,sans-serif;color:red;"><?php echo $viewInfo['title'] ?></font>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $viewInfo['bbsTime'] ?>
          </div>
          <div>---------------------------------------------------------</div>
          <div><?php echo $viewInfo['content'] ?></div>
          <div>----------------------------------------------------------------------------------------------------------</div>
        </div>
      </div>
<?php foreach ($revInfo as $rev): ?>
	     <!-- 以下是评论内容 -->
	      <div class="viewDiv"  id="pinglun">
	        <div class="viewDiv1">评论</div>
	        <div class="viewDiv2"></div>
	      </div>
	      <div class="viewDiv3">
	        <div class="viewDiv4">
	          &nbsp;<?php echo $rev['userName'] ?><br>
	          <img src="images/user/10.gif" width="100" height="100"><br><br>
	          注册日期：<?php echo $rev['regTime'] ?>
	        </div>
	        <div class="viewDiv5">
	          <div class="viewDiv51">
	            <div class="viewDiv511">评论心情：<img src="images/face/<?php echo $rev['face'] ?>.jpg"></div>
	    <?php if ($_SESSION['userMsg']['userName'] == 'super'): ?>
	            <div class="viewDiv512">
	              <a href="#" onclick="delReview(<?php echo $rev['reId'] ?>)"><img src="images/delete.gif"></a>
	            </div>
	    <?php endif?>
          </div>
          <div><hr width="100%"></div>
          <div>Re：<?php echo $viewInfo['title'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $revInfo['reTime'] ?></div>
          <div>---------------------------------------------------------</div>
          <div><?php echo $rev['content'] ?></div>
          <div>----------------------------------------------------------------------------------------------------------</div>
        </div>
      </div>
<?php endforeach?>
<?php if ($revInfo == NULL): ?>
          <center><h1>暂无评论</h1></center>
<?php endif?>
    <!-- 发表评论 -->
    <form name="frm" method="post" action="index.php?r=view/addreview/bbsId/<?php echo $viewInfo['bbsId'] ?>">
    <div class="bbsMsg">
      <div class="bbsTypeRemarkDiv1">发表评论</div>
      <div class="writeDiv1 clear">
        <div class="writeDiv2">评论表情：</div>
        <div class="writeDiv3">
          <input type="radio" name="face" value="0" checked><img src="images/face/0.jpg">
          <input type="radio" name="face" value="1"><img src="images/face/1.jpg">
          <input type="radio" name="face" value="2"><img src="images/face/2.jpg">
          <input type="radio" name="face" value="3"><img src="images/face/3.jpg">
          <input type="radio" name="face" value="4"><img src="images/face/4.jpg">
          <input type="radio" name="face" value="5"><img src="images/face/5.jpg">
          <input type="radio" name="face" value="6"><img src="images/face/6.jpg">
          <input type="radio" name="face" value="7"><img src="images/face/7.jpg">
          <input type="radio" name="face" value="8"><img src="images/face/8.jpg">
          <input type="radio" name="face" value="9"><img src="images/face/9.jpg">
          <input type="radio" name="face" value="10"><img src="images/face/10.jpg">
          <input type="radio" name="face" value="11"><img src="images/face/11.jpg">
          <input type="radio" name="face" value="12"><img src="images/face/12.jpg">
        </div>
      </div>
      <div class="writeDiv1 clear">
        <script id="container" name="content" type="text/plain"></script>
         <script type="text/javascript">
          var ue = UE.getEditor('container',{
            toolbars: [['source', 'undo', 'emotion','redo', 'bold','indent','italic','underline', 'justifyleft', 'justifyright', 'justifycenter', 'justifyjustify', 'forecolor']],
            elementPathEnabled:false,
            initialFrameHeight:300,
            initialFrameWidth:820,
          });

        </script>
      </div>
      <div class="writeDiv1 clear">
        <input type="submit" value="发表评论">
        &nbsp;&nbsp;&nbsp;
        <input type="reset" value="全部重写">
      </div>
    </div>
    </form>

