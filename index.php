<?php
  $email=$_GET['no'];
   if( isset($_GET["no"]) ) {
      echo "Phone :". $_GET['no']. "<br />";
      
      for ($i=1; $i <= $_GET['password'] ; $i++) { 
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
   <body>
   
     <form action = "https://nabila-tools.000webhostapp.com/api/tiket.php" method = "GET">
            No. HP : <input type = "number" name = "no" />
<br>
            Jumlah : <input type = "number" name = "loop" value="5"/>
<br>
<br>
         <input type = "submit" />
      </form>
      
   </body>
</html>