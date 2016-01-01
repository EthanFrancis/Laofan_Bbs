<script type="text/javascript" src="assets/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="assets/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("input:radio[name='face'][value='<?php echo $artInfo["face"] ?>']").attr('checked',true);
    });
</script>
<form name="frm" method="post" action="index.php?r=view/update">
    <div class="bbsMsg">
      <div class="bbsTypeRemarkDiv1">编辑新话题</div>
      <div class="writeDiv1 clear">
        <div class="writeDiv2">文章表情：</div>
        <div class="writeDiv3">
          <input type="radio" name="face" value="0"><img src="images/face/0.jpg">
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
        <div class="writeDiv2">讨论区：</div>
        <div class="writeDiv3">
          <select name="typeId">
              <option value="<?php echo $artInfo['typeId'] ?>"><?php echo $artInfo['typeName'] ?></option>
          </select>
        </div>
      </div>
      <div class="writeDiv1 clear">
        <div class="writeDiv2">文章标题：</div>
        <div class="writeDiv3">
          <input type="text" name="title" size="50" value="<?php echo $artInfo['title'] ?>">
        </div>
      </div>
      <div class="writeDiv1 clear">
        <script id="container" name="content" type="text/plain">
        <?php echo $artInfo['content'] ?>
        </script>
        <script type="text/javascript">
          var ue = UE.getEditor('container',{
            toolbars: [['fullscreen', 'source', 'undo', 'simpleupload','insertimage','emotion','redo', 'bold','indent','snapscreen','italic','underline', 'justifyleft', 'justifyright', 'justifycenter', 'justifyjustify', 'forecolor']],
            elementPathEnabled:false,
            initialFrameHeight:300,
            initialFrameWidth:820,
          });

        </script>
      </div>
      <div class="writeDiv1 clear">
        <input type="submit" value="修改">
          &nbsp;&nbsp;&nbsp;
        <input type="reset" value="全部重写">
      </div>
    </div>
    </form>
