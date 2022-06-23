<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $p = $l = $t = $pErr = $lErr = $tErr = "";
    $luas = $keliling = $volume = "";

    function Keliling($p, $l, $t){
        $Keliling = 4 * ($p + $l + $t);
        return $Keliling;
    }

    function luas($p, $l, $t){
        $Luas =  2 * (($p * $l) + ($p * $t) + ($l * $t));
        return $Luas;
    }

    function volume($p, $l, $t){
        $Volume = $p * $l * $t;
        return $Volume;
    }
    ?>
    
    <?php 
    if(isset($_POST['hitung'])){
        if (empty($_POST["p"])){
            $pErr = "panjang tidak boleh kosong";  
        } else{
            $p = $_POST["p"];
        }

        if (empty($_POST["l"])){
            $lErr = "lebar tidak boleh kosong";
        } else{
            $l = $_POST["l"];
        }

        if (empty($_POST["t"])){
            $tErr = "tinggi tidak boleh kosong";
        } else{
            $t = $_POST["t"];
        } 

        if ($p == "" || $l == "" || $t == "") {
            $kosong = "";
        } else{
            $keliling = keliling($_POST["p"], $_POST["l"], $_POST["t"]);
            $luas = luas($_POST["p"], $_POST["l"], $_POST["t"]);
            $volume = volume($_POST["p"], $_POST["l"], $_POST["t"]);
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
            <h1>Kalkulator Balok</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <table>
                    <tr>
                        <td>Panjang</td>
                        <td>(p)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="p" value="<?php echo $p;?>"></td>
                        <td><span class="error">* <?php echo $pErr;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>Lebar</td>
                        <td>(l)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="l" value="<?php echo $l;?>"></td>
                        <td><span class="error">* <?php echo $lErr;?></span><br></td>
                    </tr> 
                    <tr>
                        <td>Tinggi</td>
                        <td>(t)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="t" value="<?php echo $t;?>"></td>
                        <td><span class="error">* <?php echo $tErr;?></span><br></td>
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