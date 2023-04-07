<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8" />
        <title> Preview</title>
    </head>
<body>
  <?php
echo "<h1> Preview"  . "</h1>";
  
   if(empty($_POST['name'])==false)
   {
     echo "".$_POST['name']. "<br>";
     
   }
 
   else
   {
     echo " please provide a name ". "<br>";
   }
 
  if(empty($_POST['username'])==false)
  {
    echo "".$_POST['username']. "<br>";
    
  }

  else
  {
    echo " please provide a username ". "<br>";
  }


  if(empty($_POST['password'])==false)
  {
    echo "".$_POST['password']. "<br>";
    
  }

  else
  {
    echo " please provide a password ". "<br>";
  }

  if(empty($_POST['Address'])==false)
  {
    echo "".$_POST['Address']. "<br>";
    
  }
  else
  {
    echo " please provide a Address ". "<br>";
  }

  if($_POST['country']=="please select a country")
  {
    echo " please select a country ". "<br>";
    
    
  }
  else
  {
    echo "".$_POST['country']. "<br>";
  }

  if(empty($_POST['ZIPCODE'])==false)
  {
    echo "".$_POST['ZIPCODE']. "<br>";
    
  }
  else
  {
    echo " please provide a ZIPCODE ". "<br>";
  }

  if(empty($_POST['Email'])==false)
  {
    echo "".$_POST['Email']. "<br>";
    
  }
  else
  {
    echo " please provide a Email ". "<br>";
  }

  if(empty($_POST['gender'])==false)
  {
    echo " ".$_POST['gender']. "<br>";
    
  }
  else
  {
    echo " please provide a Gender ". "<br>";
  }

  if(empty($_POST['lang'])==false)
  {
    echo "".$_POST['lang']. "<br>";
  }
  else
  {
    echo " please provide a Language ". "<br>";
  }

if(empty($_POST['comment'])==false)
  {
    echo "".$_POST['comment']. "<br>";
    
  }
  else
  {
    echo " please provide a comment ". "<br>";
  }


  ?>
</body>
</html>