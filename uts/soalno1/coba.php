
<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hikung IPK</title>
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

    

    <?php
        $mk1 = $mk2 = $mk3 = $mk4 = $mk5 ="";
        $mk1Err = $mk2Err = $mk3Err = $mk4Err = $mk5Err = "";
        $ipk = $predikat = $satuan = $MK1 = $MK2 = $MK3 = $MK4 = $MK5 = "";
        $nama = $nim = $jk = $jur = ""; 
        $namaErr = $nimErr = $jkErr = $jurErr = ""; 

        function MK1($mk1){
            
            return $mk1;
        }

        function MK2($mk2){
            
            return $mk2;
        }
        function MK3($mk3){
            
            return $mk3;
        }

        function MK4($mk4){
            
            return $mk4;
        }
        function MK5($mk5){
            
            return $mk5;
        }

        function predikat($mk1, $mk2, $mk3, $mk4, $mk5){
            $gabungan = [$mk1, $mk2, $mk3, $mk4, $mk5];

            $SKS = [
                0 => 3,
                1 => 3,
                2 => 3,
                3 => 3,
                4 => 3
            ];

            $bobot=array();

            foreach ($gabungan as $a) { // menentukan bobot nilai
                if($a=="A"){
                    $bobot[]=4;
                }else if ($a=="B"){
                    $bobot[]=3;          
                } else if ($a=="C"){
                    $bobot[]=2;        
                } else if ($a=="D"){
                    $bobot[]=1;        
                } 
                else{
                    $bobot[]=0;
                }
            }  

            $ip=array();
            $pi=array();
            foreach ($SKS as $key => $value) {  
                $ip[$key]=$value*$bobot[$key]; // menghitung ipk dengan sks* nilai
                $pi[]=$ip[$key];
            }

            $ipk = array_sum($pi)/ array_sum($SKS);

            if($ipk > 3.75){
                $predikat = "Dengan Pujian Tertinggi(<i>Summa Cumlaude</i>)";
            } elseif($ipk > 3.50){
                $predikat = "Dengan Pujian(<i>Cumlaude</i>)";
            } elseif($ipk > 3.00){
                $predikat = "Sangat Memuaskan";
            } elseif($ipk > 2.75){
                $predikat = "Memuaskan";
            } elseif($ipk > 2.00){
                $predikat = "Cukup";
            } else{
                $predikat = "Wuihh mengerikann";
            }

            return $predikat;
        }

        function ipk($mk1, $mk2, $mk3, $mk4, $mk5){
            $gabungan = [$mk1, $mk2, $mk3, $mk4, $mk5];

            $SKS = [
                0 => 3,
                1 => 3,
                2 => 3,
                3 => 3,
                4 => 3
            ];

            $bobot=array();

            foreach ($gabungan as $a) { // menentukan bobot nilai
                if($a=="A"){
                    $bobot[]=4;
                }else if ($a=="B"){
                    $bobot[]=3;          
                } else if ($a=="C"){
                    $bobot[]=2;        
                } else if ($a=="D"){
                    $bobot[]=1;        
                } 
                else{
                    $bobot[]=0;
                }
            }  

            $ip=array();
            $pi=array();
            foreach ($SKS as $key => $value) {  
                $ip[$key]=$value*$bobot[$key]; // menghitung ipk dengan sks* nilai
                $pi[]=$ip[$key];
            }

            $ipk = array_sum($pi)/ array_sum($SKS);

            return $ipk;
        }
        ?>

    <?php 
        if(isset($_POST['hitung'])){

            
            if (empty($_POST["nama"])){
                $namaErr = "Nama tidak boleh kosong";
            } else{
                $nama = $_POST["nama"];
                if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
                    $namaErr = "Hanya boleh huruf dan spasi saja";
                }
            }

            if (empty($_POST["nim"])){
                $nimErr = "NIM tidak boleh kosong";
            } else{
                $nim = $_POST["nim"];
                if (!is_numeric($nim)) {
                    $nimErr = "Hanya angka yang dibolehkan";
                } elseif (strlen($nim) != 8){
                    $nimErr = "Nomor yang dimasukkan harus terdiri dari 8 digit";
                }
            }

            if (empty($_POST["jk"])) {
                $jkErr = "Jenis kelamin harus diisi";
            } else {
                $jk = $_POST["jk"];
            }

            if (empty($_POST["jur"])){
                $jurErr = "Jurusan tidak boleh kosong";
            } else{
                $jur = $_POST["jur"];
            }

            if (empty($_POST["mk1"])){
                $mk1Err = "Matkul 1 tidak boleh kosong";
            } else{
                $mk1 = $_POST["mk1"];
                if (is_numeric($mk1)) {
                    $mk1Err = "Only numeric allowed";
                } elseif (strlen($mk1) != 1){
                    $mk1Err = "Huruf yang dimasukkan harus satu";
                }
            }

            if (empty($_POST["mk2"])){
                $mk2Err = "Matkul 2 tidak boleh kosong";
            } else{
                $mk2 = $_POST["mk2"];
                if (is_numeric($mk2)) {
                    $mk2Err = "Only numeric allowed";
                } elseif (strlen($mk2) != 1){
                    $mk2Err = "Huruf yang dimasukkan harus satu";
                }
            }

            if (empty($_POST["mk3"])){
                $mk3Err = "Matkul 3 tidak boleh kosong";
            } else{
                $mk3 = $_POST["mk3"];
                if (is_numeric($mk3)) {
                    $mk3Err = "Only numeric allowed";
                } elseif (strlen($mk3) != 1){
                    $mk3Err = "Huruf yang dimasukkan harus satu";
                }
            }

            if (empty($_POST["mk4"])){
                $mk4Err = "Matkul 4 tidak boleh kosong";
            } else{
                $mk4 = $_POST["mk4"];
                if (is_numeric($mk4)) {
                    $mk4Err = "Only numeric allowed";
                } elseif (strlen($mk4) != 1){
                    $mk4Err = "Huruf yang dimasukkan harus satu";
                }
            }

            if (empty($_POST["mk5"])){
                $mk5Err = "Matkul 5 tidak boleh kosong";
            } else{
                $mk5 = $_POST["mk5"];
                if (is_numeric($mk5)) {
                    $mk5Err = "Only numeric allowed";
                } elseif (strlen($mk5) != 1){
                    $mk5Err = "Huruf yang dimasukkan harus satu";
                }
            }

            if ($mk1 == "" || $mk2 == "" || $mk3 == "" || $mk4 == "" || $mk5 == "") {
                $kosong = "";
            }else {
                $ipk = ipk($_POST["mk1"], $_POST["mk2"], $_POST["mk3"], $_POST["mk4"], $_POST["mk5"]);
                $predikat = predikat($_POST["mk1"], $_POST["mk2"], $_POST["mk3"], $_POST["mk4"], $_POST["mk5"]);
                $MK1 = MK1($_POST["mk1"]);
                $MK2 = MK2($_POST["mk2"]);
                $MK3 = MK3($_POST["mk3"]);
                $MK4 = MK4($_POST["mk4"]);
                $MK5 = MK5($_POST["mk5"]);
            }

        }

        if(isset($_POST["kembali"])){
            echo "<script>window.location = '../index1.htm'</script>";
        }
    ?>

    <div class="wrapper">
        <div class="container">
            <h1>Kalkulator IPK</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <table>
                    
                    <tr>
                        <td>Nama </td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $nama;?>" placeholder="Masukkan nama"></td>
                        <td><span class="error">* <?php echo $namaErr;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>NIM </td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" name="nim" value="<?php echo $nim;?>" placeholder="Masukkan NIM"></td>
                        <td><span class="error">* <?php echo $nimErr;?></span><br></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin </td>
                        <td></td>
                        <td>:</td>
                        <td><input type="radio" name="jk" <?php if (isset($jk) && $jk=="Perempuan") echo "checked";?> value="Perempuan">Perempuan</td>
                        <td><input type="radio" name="jk" <?php if (isset($jk) && $jk=="Laki-Laki") echo "checked";?> value="Laki-Laki">Laki-Laki</td>
                        <td><span class="error">* <?php echo $jkErr;?></span><br></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td></td>
                        <td>:</td>
                        <td>
                            <select class="pilihan" name="jur">
                                <option value="">Pilih Jurusan</option>
                                <option value="D3 Teknik Sipil">D3 Teknik Sipil</option>
                                <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                                <option value="D3 Akuntansi">D3 Akuntansi</option>
                                <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
                            </select>
                        </td>
                        <td><span class="error">* <?php echo $jurErr;?></span><br></td>
                    </tr>
                    <tr>
                        <td>Matkul 1</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 65 && event.charCode <=69" name="mk1" value="<?php echo $mk1;?>" placeholder="Masukkan nilai A/B/C/D/E"></td>
                        <td><span class="error">* <?php echo $mk1Err;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>Matkul 2</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 65 && event.charCode <=69" name="mk2" value="<?php echo $mk2;?>" placeholder="Masukkan nilai A/B/C/D/E"></td>
                        <td><span class="error">* <?php echo $mk2Err;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>Matkul 3</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 65 && event.charCode <=69" name="mk3" value="<?php echo $mk3;?>" placeholder="Masukkan nilai A/B/C/D/E"></td>
                        <td><span class="error">* <?php echo $mk3Err;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>Matkul 4</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 65 && event.charCode <=69" name="mk4" value="<?php echo $mk4;?>" placeholder="Masukkan nilai A/B/C/D/E"></td>
                        <td><span class="error">* <?php echo $mk4Err;?></span><br></td>
                    </tr>  
                    <tr>
                        <td>Matkul 5</td>
                        <td></td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 65 && event.charCode <=69" name="mk5" value="<?php echo $mk5;?>" placeholder="Masukkan nilai A/B/C/D/E"></td>
                        <td><span class="error">* <?php echo $mk5Err;?></span><br></td>
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
                        <h3>Nama</h3>
                        <p><?php echo $nama ;?></p>
                    </div>
                    <div class="container2">
                        <h3>NIM</h3>
                        <p><?php echo $nim ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Jenis Kelamin</h3>
                        <p><?php echo $jk ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Jurusan</h3>
                        <p><?php echo $jur ;?></p>
                    </div>
                    <div class="container2">
                        <h3>IPK</h3>
                        <p><?php echo $ipk ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Predikat</h3>
                        <p><?php echo $predikat ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Matkul 1</h3>
                        <p><?php echo $MK1 ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Matkul 2</h3>
                        <p><?php echo $MK2 ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Matkul 3</h3>
                        <p><?php echo $MK3 ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Matkul 4</h3>
                        <p><?php echo $MK4 ;?></p>
                    </div>
                    <div class="container2">
                        <h3>Matkul 5</h3>
                        <p><?php echo $MK5 ;?></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

        
















</body>
</html>
