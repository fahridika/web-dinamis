<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $r = $rErr = "";
    $luas = $keliling = $volume = "";
    $phi = 3.14;

    function Keliling($r){
        $Keliling = 2 * 3.14 * $r;
        return $Keliling;
    }

    function luas($r){
        $Luas =  4 * 3.14 * pow($r, 2); 
        return $Luas;
    }

    function volume($r){
        $Volume = 4/3 * 3.14 * pow($r, 3);
        return $Volume;
    }
    ?>
    
    <?php 
    if(isset($_POST['hitung'])){
        if (empty($_POST["r"])){
            $rErr = "jari-jari tidak boleh kosong";
        } else {
            $r = $_POST['r'];
            $keliling = keliling($_POST['r']);
            $luas = luas($_POST['r']);
            $volume = volume($_POST['r']);
        }     
    }

    if(isset($_POST["kembali"])){
        echo "<script>window.location = 'soalno4.php'</script>";
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
            <h1>Kalkulator Bola</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <table>
                    <tr>
                        <td>jari-jari</td>
                        <td>(r)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="r" value="<?php echo $r;?>"></td>
                        <td><span class="error">* <?php echo $rErr;?></span><br></td>
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
                        <h3>Luas Permukaan</h3>
                        <p><?php echo round($luas, 2);?> cm<sup>2</sup></p>
                    </div>
                    <div class="container2">
                        <h3>Keliling</h3>
                        <p><?php echo round($keliling, 2);?> cm</p>
                    </div>
                    <div class="container2">
                        <h3>Volume</h3>
                        <p><?php echo round($volume, 2);?> cm<sup>3</sup></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>