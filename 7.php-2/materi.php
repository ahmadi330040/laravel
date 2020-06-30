<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Loop PHP</h1>

<?php

    // perulangan for
// $hewan = ["anjing", "babi", "cicak", "domba"];

// for( $i = 0; $i<count($hewan); $i++ ){
//   echo "------------------";
//   echo $hewan[$i];
//   echo "------------------<br>";
// }

      // Perulangan foreach
    // 
    // foreach($hewan as $h){
    //   echo "--------------------";
    //   echo $h;
    //   echo "------------$hewan = ["anjing", "babi", "cicak", "domba", "kadal"];--------<br>";
    // }

        // Foreach Assosiatif array
    $data = ['nama' => 'hilman', 
            'umur'=>24, 
            'sifat'=>'malas'];
    foreach($data as $key=> $value){
      echo $value."<br>";
    }

        //while
    // $hewan = ["anjing", "babi", "cicak", "domba", "kadal"];
    // $i = 0;  
    // while($i < count($hewan) ){
    //   echo $hewan[$i]. "<br>";
    //   $i++;
    // }

        //do while
    // $hewan = ["anjing", "babi", "cicak", "domba", "kadal"];
    // $i = 0;
    //  do {
    //    echo "-------------";
    //    echo $hewan[$i]. "<br>";
    //    $i++;
    //  }
    // while($i < count($hewan));

        // Tipe data bolean
    // $hasil = true;
    // $hasil2 = false;

?>
  
</body>
</html>