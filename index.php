<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dolgozat - Sz-M. A.</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <main>
        <table>
            <?php
            $soforok = array("Nagy Tibor", "Szabó Ákos", "Kovács Géza", "Hofi Géza");
            $varosok = array("Nagykanizsa", "Kőszeg", "Tata", "Gárdony");
            $sorszam = array();
            for ($i = 0; $i < 4; $i++) { 
                $sorszam[$i] = rand(1, 200);
            }
            echo '<tr>
                <th>Név</th>
                <th>Város neve</th>
                <th>Busz sorszáma</th>
            </tr>';
            for ($i = 0; $i < 4; $i++) { 
                echo "<tr>
                    <td>$soforok[$i]</td>
                    <td>$varosok[$i]</td>
                    <td>$sorszam[$i]</td>
                </tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>