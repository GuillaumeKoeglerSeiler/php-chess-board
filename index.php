<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Document</title>
            <style>
                .cellule {
                    border: 1px solid black;
                    height: 75px;
                    width: 75px;
                    display: inline-block;
                    text-align: center;
                    font-size: 3em; 
                }
                #tableau {
                    max-width: 650px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .noir {
                    background-color: lightblue;
                   
                }
                .blanc {
                    background-color: #556B2F;
                }
                /*
                .ligne:nth-child(odd) .cellule:nth-child(even),
                .ligne:nth-child(even) .cellule:nth-child(odd)
                { background-color: black; } */
            </style>
        </head>
        <body>
            <!-- 8 = 00000
            7 = 00000111
            1 = 00000001
            64 = 00000
            63 = 00111111 -->
            <div id="tableau">
    <?php
for($ligne = 1; $ligne <= 8; $ligne++) {
    echo "<div class='ligne'></div>";
    for($colonne = 1; $colonne <= 8; $colonne++) {
        $color = (($ligne % 2 != 0) && ($colonne % 2 == 0) || ($ligne % 2 == 0) && ($colonne % 2 != 0)) ? "noir" : "blanc";
        if ($ligne%8 == 0 && ($colonne%8 == 0 || $colonne%8 == 1)) {echo "<div class='cellule $color'>&#9814;</div>";}
        elseif ($ligne%8 == 0 && ($colonne%7 == 0 || $colonne%7 == 2)) {echo "<div class='cellule $color'>&#9816;</div>";}
        elseif ($ligne%8 == 0 && ($colonne%6 == 0 || $colonne%3 == 0)) {echo "<div class='cellule $color'>&#9815;</div>";}
        elseif ($ligne%8 == 0 && $colonne%5 == 0) {echo "<div class='cellule $color'>&#9812;</div>";}
        elseif ($ligne%8 == 0 && $colonne%4 == 0) {echo "<div class='cellule $color'>&#9813;</div>";}
        elseif ($ligne%7 == 0) {echo "<div class='cellule $color'>&#9817;</div>";}
        elseif ($ligne%7 == 2) {echo "<div class='cellule $color'>&#9823;</div>";}
        elseif ($ligne%7 == 1 && ($colonne%8 == 0 || $colonne%8 == 1)) {echo "<div class='cellule $color'>&#9820;</div>";}
        elseif ($ligne%7 == 1 && ($colonne%7 == 0 || $colonne%7 == 2)) {echo "<div class='cellule $color'>&#9822;</div>";}
        elseif ($ligne%7 == 1 && ($colonne%6 == 0 || $colonne%3 == 0)) {echo "<div class='cellule $color'>&#9821;</div>";}
        elseif ($ligne%7 == 1 && $colonne%4 == 0) {echo "<div class='cellule $color'>&#9819;</div>";}
        elseif ($ligne%7 == 1 && $colonne%5 == 0) {echo "<div class='cellule $color'>&#9818;</div>";}
        else {echo "<div class='cellule $color'></div>";}       
}            
}             
        ?></div>

        </body>
    </html>