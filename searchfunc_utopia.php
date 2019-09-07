 <?php
session_start();
?> 
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="search.css">
<link rel="stylesheet" href="utopia_style.css">
<title>utopia</title>
</head>
</html>
<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","searchfunc_utopia_script.php?q="+str,true);
  xmlhttp.send();
} 
</script>
</head>
<body class="search"><p class="homeicon"><a href="utopiamain.html">&#x1F3E0; </a></p>
<div class="align">
<p class="searchtitle">UTOPIA</p>
<form>
<input type="text" name="search" class="box" size="30" placeholder="Search.." onkeyup="showResult(this.value)">
<button type="submit">&#128269;</button>
<div id="livesearch"></div>
</input>
</form>

</body>
</html>
