<?php
      require_once "class_persegi-panjang.php";
      

      $persegi_panjang1 = new persegi_panjang(10, 17);
      $persegi_panjang2 = new persegi_panjang( 6, 12);

      echo "<br/>Luas Persegi Panjang I = ".$persegi_panjang1->getLuas();
      echo "<br>Luas Persegi Panjang II = ".$persegi_panjang2->getLuas();
      
      echo "<br>Keliling Persegi Panjang I = ".$persegi_panjang1->getKeliling();
      echo "<br>Keliling Persegi Panjang II = ".$persegi_panjang2->getKeliling();
?>