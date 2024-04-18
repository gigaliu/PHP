<html>
<meta charset="utf8">

</html>
<center><h1 style="font-size:35pptx">Reviewer您好，歡迎進入論文評論網頁</h1><center>

論文評審決定: 
<input type="radio" name="sAccept" value="Accept">Accept
<input type="radio" name="sMinor Revision" value="Minor Revision">Minor Revision
<input type="radio" name="sMajor Revision" value="Major Revision">Major Revision
<input type="radio" name="sReject" value="sReject">Reject
<br/><br/>

論文評論評語:
<textarea name="sComment" rows="10" cols="50"></textarea>
<br/><br/>
</form>
<input type="submit">
<input type="logout">
</form>
<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "<form action='logout.php' method='post'>";
        echo "<button type='submit' style='font-size: 20px;'>登出</button>";
        echo "</form>";
    }else{
        echo "非法進入網頁";
        echo "1秒鐘之後回登入畫面";
        header("Refresh:1;url=0326 index.php");
    }
}else{
    header("Refresh:1;url=index.php");
}
?>
