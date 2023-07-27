<DOCTYPE !html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Uloha1</title>
    </head>
    <body>
        <form method="GET" >
            <input type="text" name="cislo1" placeholder="Prve číslo" style="margin: 15px;"><br>
            <input type="text" name="cislo2" placeholder="Druhe číslo" style="margin: 15px;"><br>
            <select name="operacia" style="margin-bottom: 10px;">
                <option value="plus">+</option>
                <option value="minus">-</option> 
                <option value="multiply">*</option>
                <option value="divis">/</option>
            </select>
            <input type="submit" value="Vypočítaj">
        </form>
        <?php 
        
        $vysledok;
        $cislo1 = $_GET["cislo1"];
        $cislo2 = $_GET["cislo2"];
        

        if(($cislo1 !== null) && ($cislo2 !== null) ) {
            if(($cislo1 == null) || ($cislo2 == null)) {                
                echo "Zadajte obe čísla";
            }
            elseif(!is_numeric($cislo1) || !is_numeric($cislo2)) {
                echo "Neplatné vstupné parametre";
            }
            else {    
                if($_GET["operacia"] == "plus") {
                    $vysledok = $cislo1 + $cislo2;
                    echo "Vysledok: " . $vysledok;
                }
                elseif($_GET["operacia"] == "minus") {
                    $vysledok = $cislo1 - $cislo2;
                    echo "Vysledok: " . $vysledok;                     
                }
                elseif($_GET["operacia"] == "multiply") {
                    $vysledok = $cislo1 * $cislo2;
                    echo "Vysledok: " . $vysledok;
                }
                elseif($_GET["operacia"] == "divis") {
                    $vysledok = $cislo1 / $cislo2;                        
                    if($cislo2 != 0) {
                        echo "Vysledok: " . $vysledok;
                    } 
                    else {
                        echo "Delenie nulou";   
                    }      
                }
            }
            
        }
        ?>
    </body>
</html>