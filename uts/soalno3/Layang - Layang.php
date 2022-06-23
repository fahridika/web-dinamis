<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang - Layang</title>
    <link rel="stylesheet" href="stylesoal3.css">
</head>
<body>
    <?php
    $s1 = $s2 = $d1 = $d2 = $s1Err = $s2Err = $d1Err = $d2Err = "";
    $luas = $keliling = "";

    function Keliling($s1, $s2){
        $Keliling = 2 * ($s1 + $s2);
        return $Keliling;
    }

    function luas($d1, $d2){
        $Luas =  $d1 * $d2 * 0.5;
        return $Luas;
    }

    ?>
    
    <?php 
    if(isset($_POST['hitung'])){
        if (empty($_POST["s1"])){
            $s1Err = "sisi 1 harus diisi";  
        } else{
            $s1 = $_POST["s1"];
        }
        if (empty($_POST["s2"])){
            $s2Err = "sisi 2 harus diisi";  
        } else{
            $s2 = $_POST["s2"];
        }
        if (empty($_POST["d1"])){
            $d1Err = "diagonal 1 harus diisi";  
        } else{
            $d1 = $_POST["d1"];
        }
        if (empty($_POST["d2"])){
            $d2Err = "diagonal 2 harus diisi";  
        } else{
            $d2 = $_POST["d2"];
        }
        if ($s1 == "" || $s2 == "" || $d1 == "" || $d2 == "" ) {
            $kosong = "";
        } else{
            $keliling = keliling($_POST["s1"], $_POST["s2"], $_POST["d1"], $_POST["d2"]);
            $luas = luas($_POST["s1"], $_POST["s2"], $_POST["d1"], $_POST["d2"]);
        }
    }

    if(isset($_POST["kembali"])){
        echo "<script>window.location = 'soal3.php'</script>";
    }
    ?>
    
    <nav>
        <div class="wrap">
            <div class="logo"><a href="../index1.htm"><img class="x" src="../polinestext.png"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="../index1.htm#beranda">Soal 1</a></li>
                    <li><a href="../index1.htm#soal2">Soal 2</a></li>
                    <li><a href="../index1.htm#soal3">Soal 3</a></li>
                    <li><a href="../index1.htm#soal4">Soal 4</a></li>
                    <li><a href="../kontak.htm">About Us</a></li>
                    <li><a href="../bukutamu.php">Buku Tamu</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="container">
            <h2>Hitung Luas Dan Keliling</h2>
            <h2>LAYANG - LAYANG</h2>
            <hr></hr>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <table>
                    <tr>
                        <td>Sisi 1</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="s1" value="<?php echo $s1;?>"></td>
                        <td><span class="error">* <?php echo $s1Err;?></span><br></td>
                    </tr>
                    <tr>
                        <td>Sisi 2</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="s2" value="<?php echo $s2;?>"></td>
                        <td><span class="error">* <?php echo $s2Err;?></span><br></td>
                    </tr>
                    <tr>
                        <td>Diagonal 1</td>
                        <td>(d1)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="d1" value="<?php echo $d1;?>"></td>
                        <td><span class="error">* <?php echo $d1Err;?></span><br></td>
                    </tr> 
                    <tr>
                        <td>Diagonal 2</td>
                        <td>(d2)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="d2" value="<?php echo $d2;?>"></td>
                        <td><span class="error">* <?php echo $d2Err;?></span><br></td>
                    </tr>   
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="button" type="submit" name="hitung" value="Hitung">
                            <input class="button" type="submit" name="kembali" value="Kembali">
                        </td>
                    </tr>
                </table>
                <h2 class="hasil">Hasil Perhitungan</h2>
                <div class="container1">
                    <div class="container2">
                        <h3>Luas Layang - Layang</h3>
                        <p><?php echo round($luas, 2);?> cm<sup>2</sup></p>
                    </div>
                    <div class="container2">
                        <h3>Keliling Layang - Layang</h3>
                        <p><?php echo round($keliling, 2);?> cm</p>
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
                <a href="number 3.php">Buku Tamu</a>
                ·
                <a href="index2.htm">About</a>
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