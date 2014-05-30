<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
<script> 
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").toggle();
});
});
</script>
<style type="text/css"> 
div.panel,p.flip
{
width:90%;
margin:auto;
padding:5px;
text-align:center;
background:#e5eecc;
border:solid 1px #c3c3c3;
}
div.panel
{
height:100px;
display:none;
}
</style>

</head>
<body>
<hr>
<p class="intro">Hide, Show, Toggle, Slide, Fade, and Animate. WOW!</p>
<p class="flip">Click to show/hide panel</p>
<div class="panel">
<p>Because time is valuable, we deliver quick and easy learning.</p>
<p>At W3Schools, you can study everything you need to learn, in an accessible and handy format.</p>
</div>
<hr>


</body>
</html>
