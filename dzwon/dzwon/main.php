<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dzwonki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <h1 class='header'>Roman Maciejewski</h1>
        <div class='left'><img src="maciej.jpg" alt="obraz Romana Maciejewskiego"></div>
        <div class='right'>Roman Maciejewski urodził się w Berlinie w 1910 roku. Zainteresowania muzyczne rozbudziła w nim matka, nauczycielka muzyki, by jako kilkuletniego chłopca posłać do Konserwatorium im. Juliusza Sterna w Berlinie. Po pierwszej wojnie światowej rodzina Maciejewskich zamieszkała w Polsce, w Lesznie, skąd pochodziła matka Romana. Tam chłopiec uczęszczał do gimnazjum, grywał też na organach w kościele budząc popłoch wśród statecznych parafian swymi szalonymi improwizacjami. Studia muzyczne kontynuował w konserwatorium w Poznaniu, gdzie uzyskał dyplom w klasie fortepianu. Mając lat osiemnaście, z rekomendacji Stanisława Wiechowicza objął kierownictwo Chóru im. S. Moniuszki w Poznaniu, z którym to zespołem koncertował w kraju i za granicą. Na studia kompozytorskie przeniósł się do Akademii Muzycznej w Warszawie. Był jednym z czołowych przedstawicieli młodego pokolenia kompozytorów, którzy pod przewodnictwem Karola Szymanowskiego torowali przed II wojną światową drogę nowoczesnej twórczości muzycznej w Polsce i podnosili jej rangę do poziomu europejskiego.</div>
    <h1 class='top'>LISTA DZWONKÓW</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'dzwony');
        $kw1 = 'SELECT "nazwa", "desc", "lokacja" FROM dzwonki';
        $res1 = mysqli_query($conn, $kw1);
        while ($row = mysqli_fetch_assoc($res1)) {
            echo $row['name'];
            echo $row['desc'];
            echo "<audio controls>";
            echo '<source src="'+$row['lokacja']+'type="type/mpeg"';
            echo "Your browser does not support the audio element.";
            echo "</audio><br>";          
        }
        ?>
</body>
</html>