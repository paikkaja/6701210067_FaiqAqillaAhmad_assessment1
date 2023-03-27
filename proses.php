<?php
      // Ambil nilai dari form HTML
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
      $operator = $_POST["operator"];

    
      switch ($operator) {
        case "+":
          $hasil = $angka1 + $angka2;
          break;
        case "-":
          $hasil = $angka1 - $angka2;
          break;
        case "*":
          $hasil = $angka1 * $angka2;
          break;
        case "/":
          $hasil = $angka1 / $angka2;
          break;
        default:
          $hasil = "Operator tidak valid";
      }

    
      echo "<h1>Hasil: $hasil</h1>";
    ?>