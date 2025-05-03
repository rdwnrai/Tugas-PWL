<?php
    $npm = "202243500877";
    $nama = "Muhammad Ridhwan Raihan";
?>
<head>
    <title>Latihan Pemrograman Web</title>
</head>
<body>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <tr>
            <td colspan="2" align="center">
                <?php echo "$npm - $nama"; ?>
            </td>
        </tr>
        <tr>
            <td width="20%" valign="top">
                <b>List Latihan</b>
                <ul>                    
                    <li><a href="202243500877_Tugas2pwl.php">Hello World</a></li>
                    <li><a href="202243500877_variabel.php">Variabel</a></li>
                    <li><a href="202243500877_variabelObject.php">Variabel Object</a></li>
                    <li><a href="202243500877_operatorString.php">Operator String</a></li>
                    <li><a href="202243500877_operatorPerbandingan.php">Operator Perbandingan</a></li>
                    <li><a href="202243500877_konstanta.php">Konstanta</a></li>
                    <li><a href="202243500877_operator.php">Operator</a></li>
                </ul>
            </td>
            <td align="center">
            <?php
        echo '<p>Hello World</p>';

        $nama = "Rdwn";
        $usia = 25;
        $hobi = array ("Mabar", "Mancing");

        echo "$nama berusia $usia tahun <br>";
        echo "Hobinya : $hobi[0], $hobi[1]";

        
            ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                Pemrograman Web 2, Copyright <?php echo $nama; ?>
            </td>
        </tr>
    </table>
</body>
</html>