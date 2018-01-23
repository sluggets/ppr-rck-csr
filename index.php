<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Crak Dat Pin</title>
  </head>
  <h1>Brute Force MD% Pin Cracker</h1>
  <h2>This application takes an MD5 hash of a four digit pin and checks all 10,1000 possible four digit PINs to determine the PIN.</h2>
  <form>
    <input type="text" name="md5" size="60">
    <input type="submit" value="Crack MD5">
  </form>
  <?php
    $md5 = $_GET['md5'] ?? FALSE;
  
    $pin_res = hax_pin($md5);
    echo "<h1>Pin is------>$pin_res</h1>";
    function hax_pin($md5_str)
    {
    $ctr = 0;
    if ($md5_str)
    {
      for ($i = 0; $i < 10; $i++)
      {
        for ($j = 0; $j < 10; $j++)
        {
          for ($k = 0; $k < 10; $k++)
          {
            for ($m = 0; $m < 10; $m++)
            {
              $candidate = $i . $j . $k . $m;
              $check = hash('md5', $candidate);
              if ($ctr < 16)
              {
                echo "<pre>$check $candidate</pre>";
              }
              $ctr++;
              if ($check == $md5_str)
              {
                //echo "<h1>$candidate</h1";
                return $candidate;
              }
            }
          }
        }
      }
      return "PIN not found"; 
    }
    else
    {
      return "PIN not found";
    }
    }
    echo var_dump($_GET);
    echo "PIN is $pin";
  ?>
</html>
