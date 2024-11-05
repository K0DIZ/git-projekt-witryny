<?php
    $conn = mysqli_connect("localhost", "root", "", "egzamin");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <section id="baner">
            <h2>Oblicz wskaźnik BMI</h2>
        </section>
        <section id="logo">
            <img src="wzor.png" alt="liczymy BMI">
        </section>
        <div class="clear"></div>
    </header>
    <main>
        <section id="lewy">
            <img src="rys1.png" alt="zrzuć kalorie!">
        </section>
        <section id="prawy">
            <h1>Podaj dane</h1>
            <form action="waga.php" method="post">
                <label for="waga">Waga: </label>
                <input type="number" id="waga" name="waga">
                <br>
                <label for="wzrost">Wzrost [cm]: </label>
                <input type="number" id="wzrost" name="wzrost">
                <br>
                <input type="submit" name="submit" id="submit" value="Licz BMI i zapisz wynik">
            </form>
            <!-- wynik działania skryptu 1 -->
             <?php
                if ($conn) {
                    @$waga = $_POST['waga'];
                    @$wzrost = $_POST['wzrost'];
                    if ($waga != "" && $wzrost != "" ) {
                        $bmi = $waga / ($wzrost * $wzrost);
                        $bmi = $bmi * 10000;
                        echo "Twoja waga: $waga; Twój wzrost: $wzrost <br> BMI wynosi: $bmi";
                        $przedzial = 0;
                        if ($bmi >= 0 && $bmi < 19) {
                            $przedzial = 1;
                        }
                        elseif (($bmi >= 19 && $bmi < 26)) {
                            $przedzial = 2;
                        }
                        elseif (($bmi >= 26 && $bmi < 31)) {
                            $przedzial = 3;
                        }
                        elseif ($bmi >= 31) {
                            $przedzial = 4;
                        }
                        $data = date("Y-m-d");
                        $sql1 = 'INSERT INTO wynik VALUES (NULL, '.$przedzial.', "'.$data.'", '.$bmi.');';
                        $zapytanie1 = mysqli_query($conn, $sql1);
                    }
                }
             ?>
        </section>
        <div class="clear"></div>
        <section id="glowny">
            <table>
                <thead>
                    <tr>
                        <th>lp.</th>
                        <th>Interpretacja</th>
                        <th>zaczyna się od...</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- wynik działania skryptu 2 -->
                    <?php
                        if ($conn) {
                            
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <section id="stopka">
            Autor: Konrad Zatorski
            <a href="kw2.JPG">Wynik działania kwerendy 2</a>
        </section>
    </footer>
</body>
</html>
<?php
    if ($conn) {
       mysqli_close($conn); 
    }
?>