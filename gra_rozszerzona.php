<?php 

function display_items($item = null) {

    $items = array(
    "kamien"        => '<a href="?item=kamien">     <br/>   <img src="Zdjęcia/kamien.jpg" width="135" hight="135" alt="kamien">         </a>',
    "nozyczki"      => '<a href="?item=nozyczki">   <br/>   <img src="Zdjęcia/nozyczki.jpg" width="135" hight="135" alt="nozyczki">     </a>',
    "papier"        => '<a href="?item=papier">     <br/>   <img src="Zdjęcia/papier.jpg" width="135" hight="135" alt="papier">         </a>',
    "czlowiek"      => '<a href="?item=czlowiek">   <br/>   <img src="Zdjęcia/czlowiek.jpg" width="135" hight="135" alt="czlowiek">     </a>',
    "blyskawica"    => '<a href="?item=blyskawica"> <br/>   <img src="Zdjęcia/blyskawica.jpg" width="135" hight="135" alt="blyskawica"> </a>',
    "diabel"        => '<a href="?item=diabel">     <br/>   <img src="Zdjęcia/diabel.jpg" width="135" hight="135" alt="diabel">         </a>',
    "drzewo"        => '<a href="?item=drzewo">     <br/>   <img src="Zdjęcia/drzewo.jpg" width="135" hight="135" alt="drzewo">         </a>',
    "ogen"          => '<a href="?item=ogen">       <br/>   <img src="Zdjęcia/ogen.jpg" width="135" hight="135" alt="ogen">             </a>',
    "pistolet"      => '<a href="?item=pistolet">   <br/>   <img src="Zdjęcia/pistolet.jpg" width="135" hight="135" alt="pistolet">     </a>',
    "powietrze"     => '<a href="?item=powietrze">  <br/>   <img src="Zdjęcia/powietrze.jpg" width="135" hight="135" alt="powietrze">   </a>',
    "smok"          => '<a href="?item=smok">       <br/>   <img src="Zdjęcia/smok.jpg" width="135" hight="135" alt="smok">             </a>',
    "szpony"        => '<a href="?item=szpony">     <br/>   <img src="Zdjęcia/szpony.jpg" width="135" hight="135" alt="szpony">         </a>',
    "waz"           => '<a href="?item=waz">        <br/>   <img src="Zdjęcia/waz.jpg" width="135" hight="135" alt="waz">               </a>',
    "wilk"          => '<a href="?item=wilk">       <br/>   <img src="Zdjęcia/wilk.jpg" width="135" hight="135" alt="wilk">             </a>',
    "woda"          => '<a href="?item=woda">       <br/>   <img src="Zdjęcia/woda.jpg" width="135" hight="135" alt="woda">             </a>',

    );

    if($item == null):
        foreach($items as $item => $value):
            echo $value;
        endforeach;
    else:
        echo str_replace("?item={$item}","#",$items[$item]);
    endif;
}

function gra() {

    if(isset($_GET['item']) == TRUE):
        $items = array('kamien', 'nozyczki', 'papier','czlowiek', 'blyskawica', 'diabel', 'drzewo', 'ogen', 'pistolet', 'powietrze', 'smok', 'szpony', 'waz', 'wilk', 'woda');
        $user_item = strtolower($_GET['item']);
        $comp_item = $items[rand(0, 14)];

        if(in_array($user_item, $items) == FALSE):
            echo "Musisz wybrać";
            die;
        endif;

        if(
            $user_item == 'kamien'   && $comp_item == 'nozyczki'  or
            $user_item == 'kamien'   && $comp_item == 'ogen'      or
            $user_item == 'kamien'   && $comp_item == 'waz'       or
            $user_item == 'kamien'   && $comp_item == 'czlowiek'  or
            $user_item == 'kamien'   && $comp_item == 'drzewo'    or
            $user_item == 'kamien'   && $comp_item == 'wilk'      or
            $user_item == 'kamien'   && $comp_item == 'szpony'    or

            $user_item == 'nozyczki' && $comp_item == 'papier'    or
            $user_item == 'nozyczki' && $comp_item == 'waz'       or
            $user_item == 'nozyczki' && $comp_item == 'czlowiek'  or
            $user_item == 'nozyczki' && $comp_item == 'drzewo'    or
            $user_item == 'nozyczki' && $comp_item == 'wilk'      or
            $user_item == 'nozyczki' && $comp_item == 'szpony'    or
            $user_item == 'nozyczki' && $comp_item == 'powietrze' or

            $user_item == 'papier'   && $comp_item == 'kamien'  or
            $user_item == 'papier'   && $comp_item == 'powietrze'  or
            $user_item == 'papier'   && $comp_item == 'woda'  or
            $user_item == 'papier'   && $comp_item == 'smok'  or
            $user_item == 'papier'   && $comp_item == 'diabel'  or
            $user_item == 'papier'   && $comp_item == 'blyskawica'  or
            $user_item == 'papier'   && $comp_item == 'pistolet'  or

            $user_item == 'czlowiek'   && $comp_item == 'drzewo' or
            $user_item == 'czlowiek'   && $comp_item == 'wilk' or
            $user_item == 'czlowiek'   && $comp_item == 'szpony' or
            $user_item == 'czlowiek'   && $comp_item == 'papier' or
            $user_item == 'czlowiek'   && $comp_item == 'powietrze' or
            $user_item == 'czlowiek'   && $comp_item == 'woda' or
            $user_item == 'czlowiek'   && $comp_item == 'smok' or

            $user_item == 'blyskawica' && $comp_item == 'pistolet' or
            $user_item == 'blyskawica' && $comp_item == 'kamien' or
            $user_item == 'blyskawica' && $comp_item == 'ogen' or
            $user_item == 'blyskawica' && $comp_item == 'nozyczki' or
            $user_item == 'blyskawica' && $comp_item == 'waz' or
            $user_item == 'blyskawica' && $comp_item == 'czlowiek' or
            $user_item == 'blyskawica' && $comp_item == 'drzewo' or

            $user_item == 'diabel'   && $comp_item == 'blyskawica' or
            $user_item == 'diabel'   && $comp_item == 'pistolet' or
            $user_item == 'diabel'   && $comp_item == 'kamien' or
            $user_item == 'diabel'   && $comp_item == 'ogen' or
            $user_item == 'diabel'   && $comp_item == 'nozyczki' or
            $user_item == 'diabel'   && $comp_item == 'waz' or
            $user_item == 'diabel'   && $comp_item == 'czlowiek' or

            $user_item == 'drzewo'   && $comp_item == 'wilk' or
            $user_item == 'drzewo'   && $comp_item == 'szpony' or
            $user_item == 'drzewo'   && $comp_item == 'papier' or
            $user_item == 'drzewo'   && $comp_item == 'powietrze' or
            $user_item == 'drzewo'   && $comp_item == 'woda' or
            $user_item == 'drzewo'   && $comp_item == 'smok' or
            $user_item == 'drzewo'   && $comp_item == 'diabel' or

            $user_item == 'ogen' && $comp_item == 'nozyczki' or
            $user_item == 'ogen' && $comp_item == 'waz' or
            $user_item == 'ogen' && $comp_item == 'czlowiek' or
            $user_item == 'ogen' && $comp_item == 'drzewo' or
            $user_item == 'ogen' && $comp_item == 'wilk' or
            $user_item == 'ogen' && $comp_item == 'szpony' or
            $user_item == 'ogen' && $comp_item == 'papier' or

            $user_item == 'pistolet'   && $comp_item == 'kamien'  or
            $user_item == 'pistolet'   && $comp_item == 'ogen'  or
            $user_item == 'pistolet'   && $comp_item == 'nozyczki'  or
            $user_item == 'pistolet'   && $comp_item == 'waz'  or
            $user_item == 'pistolet'   && $comp_item == 'czlowiek'  or
            $user_item == 'pistolet'   && $comp_item == 'drzewo'  or
            $user_item == 'pistolet'   && $comp_item == 'wilk'  or


            $user_item == 'powietrze'   && $comp_item == 'woda' or
            $user_item == 'powietrze'   && $comp_item == 'smok' or
            $user_item == 'powietrze'   && $comp_item == 'diabel' or
            $user_item == 'powietrze'   && $comp_item == 'blyskawica' or
            $user_item == 'powietrze'   && $comp_item == 'pistolet' or
            $user_item == 'powietrze'   && $comp_item == 'kamien' or
            $user_item == 'powietrze'   && $comp_item == 'ogen' or

            $user_item == 'smok' && $comp_item == 'diabel' or
            $user_item == 'smok' && $comp_item == 'blyskawica' or
            $user_item == 'smok' && $comp_item == 'pistolet' or
            $user_item == 'smok' && $comp_item == 'kamien' or
            $user_item == 'smok' && $comp_item == 'ogen' or
            $user_item == 'smok' && $comp_item == 'nozyczki' or
            $user_item == 'smok' && $comp_item == 'waz' or

            $user_item == 'szpony'   && $comp_item == 'papier'   or
            $user_item == 'szpony'   && $comp_item == 'powietrze'   or
            $user_item == 'szpony'   && $comp_item == 'woda'   or
            $user_item == 'szpony'   && $comp_item == 'smok'   or
            $user_item == 'szpony'   && $comp_item == 'diabel'   or
            $user_item == 'szpony'   && $comp_item == 'blyskawica'   or
            $user_item == 'szpony'   && $comp_item == 'pistolet'   or

            $user_item == 'waz'   && $comp_item == 'czlowiek' or
            $user_item == 'waz'   && $comp_item == 'drzewo' or
            $user_item == 'waz'   && $comp_item == 'wilk' or
            $user_item == 'waz'   && $comp_item == 'szpony' or
            $user_item == 'waz'   && $comp_item == 'papier' or
            $user_item == 'waz'   && $comp_item == 'powietrze' or
            $user_item == 'waz'   && $comp_item == 'woda' or

            $user_item == 'wilk' && $comp_item == 'szpony' or
            $user_item == 'wilk' && $comp_item == 'papier' or
            $user_item == 'wilk' && $comp_item == 'powietrze' or
            $user_item == 'wilk' && $comp_item == 'woda' or
            $user_item == 'wilk' && $comp_item == 'smok' or
            $user_item == 'wilk' && $comp_item == 'diabel' or
            $user_item == 'wilk' && $comp_item == 'blyskawica' or

            $user_item == 'woda'   && $comp_item == 'smok'   or
            $user_item == 'woda'   && $comp_item == 'diabel'   or
            $user_item == 'woda'   && $comp_item == 'blyskawica'   or
            $user_item == 'woda'   && $comp_item == 'pistolet'   or
            $user_item == 'woda'   && $comp_item == 'kamien'   or
            $user_item == 'woda'   && $comp_item == 'ogen'   or
            $user_item == 'woda'   && $comp_item == 'nozyczki' ):
                echo '<h2>Wygrałeś</h2>';
        endif;
                
        if(
            $comp_item == 'kamien'   && $user_item == 'nozyczki' or
            $comp_item == 'kamien'   && $user_item == 'ogen' or
            $comp_item == 'kamien'   && $user_item == 'waz' or
            $comp_item == 'kamien'   && $user_item == 'czlowiek' or
            $comp_item == 'kamien'   && $user_item == 'drzewo' or
            $comp_item == 'kamien'   && $user_item == 'wilk' or
            $comp_item == 'kamien'   && $user_item == 'szpony' or

            $comp_item == 'nozyczki' && $user_item == 'papier' or
            $comp_item == 'nozyczki' && $user_item == 'waz' or
            $comp_item == 'nozyczki' && $user_item == 'czlowiek' or
            $comp_item == 'nozyczki' && $user_item == 'drzewo' or
            $comp_item == 'nozyczki' && $user_item == 'wilk' or
            $comp_item == 'nozyczki' && $user_item == 'szpony' or
            $comp_item == 'nozyczki' && $user_item == 'powietrze' or

            $comp_item == 'papier'   && $user_item == 'kamien'   or
            $comp_item == 'papier'   && $user_item == 'powietrze'  or
            $comp_item == 'papier'   && $user_item == 'woda'  or
            $comp_item == 'papier'   && $user_item == 'smok'  or
            $comp_item == 'papier'   && $user_item == 'diabel'  or
            $comp_item == 'papier'   && $user_item == 'blyskawica'  or
            $comp_item == 'papier'   && $user_item == 'pistolet'  or

            $comp_item == 'czlowiek'   && $user_item == 'drzewo' or
            $comp_item == 'czlowiek'   && $user_item == 'wilk' or
            $comp_item == 'czlowiek'   && $user_item == 'szpony' or
            $comp_item == 'czlowiek'   && $user_item == 'papier' or
            $comp_item == 'czlowiek'   && $user_item == 'powietrze' or
            $comp_item == 'czlowiek'   && $user_item == 'woda' or
            $comp_item == 'czlowiek'   && $user_item == 'smok' or

            $comp_item == 'blyskawica' && $user_item == 'pistolet' or
            $comp_item == 'blyskawica' && $user_item == 'kamien' or
            $comp_item == 'blyskawica' && $user_item == 'ogen' or
            $comp_item == 'blyskawica' && $user_item == 'nozyczki' or
            $comp_item == 'blyskawica' && $user_item == 'waz' or
            $comp_item == 'blyskawica' && $user_item == 'czlowiek' or
            $comp_item == 'blyskawica' && $user_item == 'drzewo' or

            $comp_item == 'diabel'   && $user_item == 'blyskawica' or
            $comp_item == 'diabel'   && $user_item == 'pistolet' or
            $comp_item == 'diabel'   && $user_item == 'kamien' or
            $comp_item == 'diabel'   && $user_item == 'ogen' or
            $comp_item == 'diabel'   && $user_item == 'nozyczki' or
            $comp_item == 'diabel'   && $user_item == 'waz' or
            $comp_item == 'diabel'   && $user_item == 'czlowiek' or

            $comp_item == 'drzewo'   && $user_item == 'wilk' or
            $comp_item == 'drzewo'   && $user_item == 'szpony' or
            $comp_item == 'drzewo'   && $user_item == 'papier' or
            $comp_item == 'drzewo'   && $user_item == 'powietrze' or
            $comp_item == 'drzewo'   && $user_item == 'woda' or
            $comp_item == 'drzewo'   && $user_item == 'smok' or
            $comp_item == 'drzewo'   && $user_item == 'diabel' or

            $comp_item == 'ogen' && $user_item == 'nozyczki' or
            $comp_item == 'ogen' && $user_item == 'waz' or
            $comp_item == 'ogen' && $user_item == 'czlowiek' or
            $comp_item == 'ogen' && $user_item == 'drzewo' or
            $comp_item == 'ogen' && $user_item == 'wilk' or
            $comp_item == 'ogen' && $user_item == 'szpony' or
            $comp_item == 'ogen' && $user_item == 'papier' or

            $comp_item == 'pistolet'   && $user_item == 'kamien'  or
            $comp_item == 'pistolet'   && $user_item == 'ogen'  or
            $comp_item == 'pistolet'   && $user_item == 'nozyczki'  or
            $comp_item == 'pistolet'   && $user_item == 'waz'  or
            $comp_item == 'pistolet'   && $user_item == 'czlowiek'  or
            $comp_item == 'pistolet'   && $user_item == 'drzewo'  or
            $comp_item == 'pistolet'   && $user_item == 'wilk'  or


            $comp_item == 'powietrze'   && $user_item == 'woda' or
            $comp_item == 'powietrze'   && $user_item == 'smok' or
            $comp_item == 'powietrze'   && $user_item == 'diabel' or
            $comp_item == 'powietrze'   && $user_item == 'blyskawica' or
            $comp_item == 'powietrze'   && $user_item == 'pistolet' or
            $comp_item == 'powietrze'   && $user_item == 'kamien' or
            $comp_item == 'powietrze'   && $user_item == 'ogen' or

            $comp_item == 'smok' && $user_item == 'diabel' or
            $comp_item == 'smok' && $user_item == 'blyskawica' or
            $comp_item == 'smok' && $user_item == 'pistolet' or
            $comp_item == 'smok' && $user_item == 'kamien' or
            $comp_item == 'smok' && $user_item == 'ogen' or
            $comp_item == 'smok' && $user_item == 'nozyczki' or
            $comp_item == 'smok' && $user_item == 'waz' or

            $comp_item == 'szpony'   && $user_item == 'papier'   or
            $comp_item == 'szpony'   && $user_item == 'powietrze'   or
            $comp_item == 'szpony'   && $user_item == 'woda'   or
            $comp_item == 'szpony'   && $user_item == 'smok'   or
            $comp_item == 'szpony'   && $user_item == 'diabel'   or
            $comp_item == 'szpony'   && $user_item == 'blyskawica'   or
            $comp_item == 'szpony'   && $user_item == 'pistolet'   or

            $comp_item == 'waz'   && $user_item == 'czlowiek' or
            $comp_item == 'waz'   && $user_item == 'drzewo' or
            $comp_item == 'waz'   && $user_item == 'wilk' or
            $comp_item == 'waz'   && $user_item == 'szpony' or
            $comp_item == 'waz'   && $user_item == 'papier' or
            $comp_item == 'waz'   && $user_item == 'powietrze' or
            $comp_item == 'waz'   && $user_item == 'woda' or

            $comp_item == 'wilk' && $user_item == 'szpony' or
            $comp_item == 'wilk' && $user_item == 'papier' or
            $comp_item == 'wilk' && $user_item == 'powietrze' or
            $comp_item == 'wilk' && $user_item == 'woda' or
            $comp_item == 'wilk' && $user_item == 'smok' or
            $comp_item == 'wilk' && $user_item == 'diabel' or
            $comp_item == 'wilk' && $user_item == 'blyskawica' or

            $comp_item == 'woda'   && $user_item == 'smok'   or
            $comp_item == 'woda'   && $user_item == 'diabel'   or
            $comp_item == 'woda'   && $user_item == 'blyskawica'   or
            $comp_item == 'woda'   && $user_item == 'pistolet'   or
            $comp_item == 'woda'   && $user_item == 'kamien'   or
            $comp_item == 'woda'   && $user_item == 'ogen'   or
            $comp_item == 'woda'   && $user_item == 'nozyczki' ):
                echo '<h2>Przegrałeś</h2>';
        endif;

        if($user_item == $comp_item):
            echo '<h2>Remis</h2>';
        endif;

        display_items($user_item);
        display_items($comp_item);
        print('<input type = "button" name = "newgamebtn" value = "Play again" id = "butt" onclick = "window.location.href=\'index_gra_rozszerzona.php\'">');
    else:
        display_items();
    endif;
    }
?>
