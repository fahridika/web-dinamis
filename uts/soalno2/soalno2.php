<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>

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
    <!-- <div class="wrapper">
        <div class="container"> -->
    <div class="wrapper">
    <div class="container">
    <table style="border: 1px solid black;">
      <tr>
        <td>Nama</td>
        <td>Matematika</td>
        <td>Bahasa indonesia</td>
        <td>Bahasa inggris</td>
        <td>IPA</td>
        <td>IPS</td>
      </tr>
      <?php
          
$mahasiswa = array(
    array("Adi", 7,8,6,6,7),
    array("Bunga", 8,9,9,8,7),
    array("Candra",8,8,9,9,8),
    array("Dita", 6, 8, 8,6,8),
    array("Edgar", 5, 6, 5,6,6)
  );
    // tabel
  for ($row = 0; $row <5; $row++) {
    echo "<tr>";
    for ($col = 0; $col <6; $col++) {
      echo "<td>".$mahasiswa[$row][$col]."</td>";
    }
    echo "</tr>";
  }
  ?>
    </table>
        <!-- </div>
    </div>   -->

    <h2>Keterangan Siswa dan Rata- Rata Nilai per mapel</h2>
<?php

    $mahasiswa = array(
      array("Adi", 7,8,6,6,7),
      array("Bunga", 8,9,9,8,7),
      array("Candra",8,8,9,9,8),
      array("Dita", 6,8, 8,6,8),
      array("Edgar",5,6, 5,6,6)
      );

    $jumlah = 0;
    
    $nilaiEdgar = $mahasiswa[4][1]+$mahasiswa[4][2]+$mahasiswa[4][3]+$mahasiswa[4][4]+$mahasiswa[4][5];
        
        for ($row = 0; $row <5; $row++) {
            
            $jumlah = 0;
            for ($col = 0; $col < 5; $col++) {
               // echo "<td>".$mahasiswa[$row][$col]."</td>";
                $col;
                $jumlah += $mahasiswa[$row][$col+1];   
            }
            // echo  $mahasiswa[$row][0]. " dengan jumlah nilai ".$jumlah."</br>";
            echo  $mahasiswa[$row][0]. " dengan rata-rata ".$jumlah / 5  ;
            echo "</br>";
        // echo "</tr>";
        }

        $mh = $mahasiswa;
        $mtk = "</br>Rata-rata Matematika adalah ".($mh[0][1]+$mh[1][1]+$mh[2][1]+$mh[3][1]+$mh[4][1])/5;
        $bind ="</br>Rata-rata Bahasa Indonesia adalah ".($mh[0][2]+$mh[1][2]+$mh[2][2]+$mh[3][2]+$mh[4][2])/5;
        $bing = "</br>Rata-rata Bahasa Inggris adalah ".($mh[0][3]+$mh[1][3]+$mh[2][3]+$mh[3][3]+$mh[4][3])/5;
        $ipa = "</br>Rata-rata IPA adalah ".($mh[0][4]+$mh[1][4]+$mh[2][4]+$mh[3][4]+$mh[4][4])/5;
        $ips = "</br>Rata-rata IPS adalah ".($mh[0][5]+$mh[1][5]+$mh[2][5]+$mh[3][5]+$mh[4][5])/5;

    


    echo $mtk."</br>";
    echo $bind."</br>";
    echo $bing."</br>";
    echo $ipa."</br>";
    echo $ips."</br>";


          
        

        
        if ($mahasiswa[0][4] > $mahasiswa[0][5]  ){
          echo "</br>".$mahasiswa[0][0]. "Masuk MIPA</br>";
        } else  {
          echo "</br>".$mahasiswa[0][0]." Masuk IPS</br>";
        }

        if ($mahasiswa[1][4] > $mahasiswa[1][5]  ){
          echo "</br>".$mahasiswa[1][0]. " Masuk MIPA</br>";
        } else  {
          echo "</br>".$mahasiswa[1][0]." Masuk IPS</br>";
        }

        if ($mahasiswa[2][4] > $mahasiswa[2][5]  ){
          echo "</br>".$mahasiswa[2][0]. " Masuk MIPA</br>";
        } else  {
          echo "</br>".$mahasiswa[2][0]." Masuk IPS</br>";
        }

        if ($mahasiswa[3][4] > $mahasiswa[3][5]  ){
          echo "</br>".$mahasiswa[3][0]. " Masuk MIPA</br>";
        } else  {
          echo "</br>".$mahasiswa[3][0]." Masuk IPS</br>";
        }

        if ($mahasiswa[4][4] >= $mahasiswa[4][5] &&  $nilaiEdgar < 30 ){
          echo "</br>".$mahasiswa[4][0]. " Tidak naik kelas</br>";
        } else  {
          echo "</br>".$mahasiswa[4][0]." Masuk IPS</br>";
        }
        
?>  
    <div class="tengah">
        <div class="kolom">
            <p><a href="../index1.htm" class="tbl-biru">Kembali</a></p>
        </div>
    </div>
  </div>
  </div>
</body> 
</html>
