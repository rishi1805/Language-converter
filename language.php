<?php
include('convert.php');
$en_select='';
$hn_select='';
$language='';

if((isset($_GET['language']) && $_GET['language']=='en')|| !isset($_GET['language']))
{
    $en_select='selected';
    $language='en';
}

else{
    $hn_select='selected';
     $language='hn';
}
?> 
<html>
<head>
<style>
body{
    margin:auto;
    width:80%;
}
#content{
margin-top: 40px;
}
#nav_bar
    li{list-style:none;display:inline; margin-right:10px; margin-top:20px;}

</style>
</head>
<body>
<div class="container">
<div id="nav_bar">
<ul>
<li>
Language
<select onchange ="set_language()" name="language" id="language">

<option value="en" <?php echo $en_select?>>English</option>
<option value="hn"<?php echo $hn_select?>>Hindi</option>

</select></li></ul>
</div>
<div id="content">
<p><?php echo $website_content[$language]['0']?></p>
  
  </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-2.2.4.js">
  </script>
  <script>
  function set_language(){
      var language=jQuery('#language').val();
      window.location.href='http://localhost/php_tuts/language/language.php?language='+language;
  }
  </script> 
  </body>
  </html>