<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Datar</title>
    <link rel="stylesheet" href="stylesoal3.css">
</head>
<body>
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
            <h1>PILIH BANGUN DATAR</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <select class="pilihan" name="dropdown">
                                <option value="lingkaran">Lingkaran</option>
                                <option value="persegi">Persegi</option>
                                <option value="segitiga">Segitiga</option>
                                <option value="jajargenjang">Jajargenjang</option>
                                <option value="layang2">Layang-layang</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="button" type="submit" name="submit" value="Mulai">
                            <input class="button" type="submit" name="kembali" value="Kembali">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST["submit"])){
            $rumus = $_POST["dropdown"];
            if ($rumus == "lingkaran"){
                echo "<script>window.location = 'Lingkaran.php'</script>";
            }
            if ($rumus == "persegi"){
                echo "<script>window.location = 'Persegi.php'</script>";
            }
            if ($rumus == "segitiga"){
                echo "<script>window.location = 'Segitiga.php'</script>";
            }
            if ($rumus == "jajargenjang"){
                echo "<script>window.location = 'Jajargenjang.php'</script>";
            }
            if ($rumus == "layang2"){
                echo "<script>window.location = 'Layang - layang.php'</script>";
            }
        }
        if(isset($_POST["kembali"])){
            echo "<script>window.location = '../index1.htm'</script>";
        }
    ?>

</body>

</html>