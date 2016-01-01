<br><br>
<script type="text/javascript" src='assets/jquery/jquery-1.11.3.js'></script>
<script type="text/javascript">
$(document).ready(changeTime);
    var index=5;
    function changeTime () {
        $('#timeSpan').html(index);
        index--;
        if(index<1){
            window.location="<?php echo $jumpUrl ?>";
        }else{
            window.setTimeout("changeTime()", 1000);
        }
    }

</script>
<table width="700" align="center" border="1" cellpadding="10" cellspacing="0" bgcolor="#abcdef">
    <tr>
        <td><b>系统提示信息</b></td>
    </tr>
    <tr>
        <td align="center">
            <br><?php echo $message ?>!页面将在<span id="timeSpan">5</span>秒钟内跳转
            <br><br>如果没有自动跳转,<a href="<?php echo $jumpUrl ?>">请点击这里</a><br><br>
        </td>
    </tr>
</table>

