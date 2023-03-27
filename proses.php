<?php
      // Ambil nilai dari form HTML
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
      $operator = $_POST["operator"];

<<<<<<< HEAD
      // Lakukan operasi aritmatika sesuai dengan operator
      if ($operator == "+") {
        $hasil = $angka1 + $angka2;
      } else if ($operator == "-") {
        $hasil = $angka1 - $angka2;
      } else if ($operator == "*") {
        $hasil = $angka1 * $angka2;
      } else if ($operator == "/") {
        $hasil = $angka1 / $angka2;
      } else {
        $hasil = "Operator tidak valid";
      }

      // Tampilkan hasil operasi aritmatika
      echo "<h1>Hasil: $hasil</h1>";
?>
