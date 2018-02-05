<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

  .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
  .btn1 {
    background-color: #fba919;
    color: #000;
    border-bottom-right-radius: 30%;
    border-top-left-radius: 30%;
  }
  .drop-up
  {
    background-color: #f9a104;
    color: #FFF;
    text-shadow: 1px 1px 1px #000;
  }
</style>
<script type="text/javascript">
    function inputFocus(i){
    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
}
function inputBlur(i){
    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
}
</script>
<iframe name="hiddenFrame" class="hide"></iframe>

</script>
</head>
<body>
<div class="dropup navbar-fixed-bottom" >
 <div id="footer" style="height: 40px;">
      <div class="container-fluid" >
        <p class="text-muted credit" >
            <div class="btn-group" >
                <button type="button" class="btn1 btn-default dropdown-toggle" data-toggle="dropdown" >
                    Feedback<span class="caret caret-up"></span>
                </button>
                
                <ul class="dropdown-menu drop-up" role="menu">
                <form method="POST" action="store.php" target="hiddenFrame" id="myForm">
                    <div>
                    <div class="field"><li><input name="name" type="text" required=""  style="width: 100%; color:#888; text-align: center; " onfocus="inputFocus(this)" onblur="inputBlur(this)" placeholder="Enter Name" /></li></div>
                    <div class="field"> <li><br>
                    <textarea name="message" rows="10" cols="35" required="" value="" style=" color:#000; text-align: center;" onfocus="inputFocus(this)" onblur="inputBlur(this)" placeholder="Your valuable Feedback"></textarea></li></div>
                    <div class="field"></div> <li><input type="submit" value="Submit Feedback" style="width: 100%;color: #000;" />
                    </li>
                  </form>
                    <li class="divider"></li>
                  
                
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script></ul>
                
            </div>
        </p>
      </div>
    </div>
</div>
</body>
</html>