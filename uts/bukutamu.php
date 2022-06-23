<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku Tamu</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
  <?php
  $nameErr = $emailErr = $komentarErr = "";
  $name = $email = $komentar = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z]*$/",$name)) {
        $nameErr = ""; 
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "";
      }
    }
    
    if (empty($_POST["komentar"])) {
      $komentarErr = "Komentar is required";
    } else {
      $komentar = test_input($_POST["komentar"]);
    }
  }
  
  if(isset($_POST["kembali"])){
      echo "<script>window.location = 'index1.htm'</script>";
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <nav>   
      <div class="wrap">
          <div class="logo"><a href="index1.htm"><img class="x" src="polinestext.png"></a></div>
          <div class="menu">
              <ul>
                  <li><a href="index1.htm#beranda">Soal 1</a></li>
                  <li><a href="index1.htm#soal2">Soal 2</a></li>
                  <li><a href="index1.htm#soal3">Soal 3</a></li>
                  <li><a href="index1.htm#soal4">Soal 4</a></li>
                  <li><a href="kontak.htm">About Us</a></li>
                  <li><a href="bukutamu.php">Buku Tamu</a></li>
              </ul>
          </div>
      </div>
  </nav>
  
  <div class="wrapper">
    <div class="container">
      <h1>BUKU TAMU</h1><hr></hr>
      <p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="name" onkeypress="return event.charCode < 48 || event.charCode >57"></td>
            <td class="error">* <?php echo $nameErr;?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
            <td  class="error">* <?php echo $emailErr;?></td>
          </tr>
          <tr>
            <td>Komentar</td>
            <td>:</td>
            <td><textarea name="komentar" rows="5" cols="20" placeholder="Silahkan isi komentar anda"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <input class="button" type="submit" name="submit" value="SUBMIT">
              <input class="button" type="submit" name="kembali" value="KEMBALI">
            </td>
          </tr>
        </table>  

      <h2 class="hasil">Your Input</h2>
      <div class="container1">
          <div class="container2">
              <?php
              echo "Nama   Anda     : ".$name."<br><br>";
              echo "Email   Anda    : ".$email."<br><br>";
              echo "Komentar   Anda : ".$komentar."<br><br>";
              ?>
          </div>
      </div>
    </form>
  </div>
</div>

<footer class="footer-distributed">
        <div class="footer-left">
            <h3>Kelompok<span>8</span></h3>
            <p class="footer-links">
                <a href="index1.htm">Home</a>
                ·
                <a href="bukutamu.php">Buku Tamu</a>
                ·
                <a href="kontak.htm">About</a>
                ·
                <a href="https://www.polines.ac.id/">Polines</a>
            </p>
    
            <p class="footer-company-name">Ashiappp &copy; 2019</p>
        </div>
    
        <div class="footer-center">
    
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Jl. Prof. Sudarto, Tembalang</span> Semarang, Jawa Tengah</p>
            </div>
    
            <div>
                <i class="fa fa-phone"></i>
                <p>(024) 7473417</p>
            </div>
    
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">sekretariat@polines.ac.id</a></p>
            </div>
    
        </div>
    
        <div class="footer-right">
    
            <p class="footer-company-about">
                <span>About Polines</span>
                perguruan tinggi vokasi negeri yang terletak di areal kampus Universitas Diponegoro.
            </p>
    
        </div>
    
    </footer>

</body>
</html>