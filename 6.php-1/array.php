<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array('mike', 'Dustin', 'Will', 'Lucas', 'Max', 'Eleven'); // Lengkapi di sini
        $adults = array('Hopper', 'Nancy', 'Will', 'Lucas', 'Max', 'Eleven'); 
        print_r($kids);
        echo "<br>";
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        $total = count($kids);
        $total2 =count($adults);
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids:  $total" ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: $total2" ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        echo "<li> $adults[5] </li>";
        // Lanjutkan

        echo "</ol>";

        echo "<h3>Soal 3</h3>";

        $data = array(
            array("Will Byers", "12", "Will the Wise", "Alive"),
            array("Mike Wheeler", "12", "Dungeon Master", "Alive"),
            array("Jim Hopper", "43", "Chief Hopper", "Deceased"),
            array("Eleven", "12", "El", "Alive")
        );

        /* 00 01 02 03
            10 11 12 13
            20 21 22 23
            30 31 32 33
        */
        echo "Name: ";
        echo $data[0][0];
        echo "<br>Age: ";
        echo $data[0][1];
        echo "<br>Aliases: ";
        echo $data[0][2];
        echo "<br>Status: ";
        echo $data[0][3];
        echo "<br><br>";

        echo "Name: ";
        echo $data[1][0];
        echo "<br>Age: ";
        echo $data[1][1];
        echo "<br>Aliases: ";
        echo $data[1][2];
        echo "<br>Status: ";
        echo $data[1][3];
        echo "<br><br>";

        echo "Name: ";
        echo $data[2][0];
        echo "<br>Age: ";
        echo $data[2][1];
        echo "<br>Aliases: ";
        echo $data[2][2];
        echo "<br>Status: ";
        echo $data[2][3];
        echo "<br><br>";

        echo "Name: ";
        echo $data[3][0];
        echo "<br>Age: ";
        echo $data[3][1];
        echo "<br>Aliases: ";
        echo $data[3][2];
        echo "<br>Status: ";
        echo $data[3][3];
        echo "<br><br>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        
    ?>
</body>
</html>