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
                <label for="wzrost">Wzrost [cm]: </label>
                <input type="number" id="wzrost" name="wzrost">
                <input type="submit" name="submit" id="submit" value="Licz BMI i zapisz wynik">
            </form>
            <!-- wynik działania skryptu 1 -->
        </section>
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