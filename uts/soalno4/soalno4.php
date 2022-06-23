<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
            <h1>KALKULATOR BANGUN RUANG</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <select class="pilihan" name="kalkulator">
                                <option value="balok">Balok</option>
                                <option value="tabung">Tabung</option>
                                <option value="bola">Bola</option>
                                <option value="kerucut">Kerucut</option>
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
            $rumus = $_POST["kalkulator"];
            if ($rumus == "balok"){
                echo "<script>window.location = 'Balok.php'</script>";
            }
            if ($rumus == "tabung"){
                echo "<script>window.location = 'Tabung.php'</script>";
            }
            if ($rumus == "bola"){
                echo "<script>window.location = 'Bola.php'</script>";
            }
            if ($rumus == "kerucut"){
                echo "<script>window.location = 'Kerucut.php'</script>";
            }
        }
        if(isset($_POST["kembali"])){
            echo "<script>window.location = '../index1.htm'</script>";
        }
    ?>
</body>
</html>