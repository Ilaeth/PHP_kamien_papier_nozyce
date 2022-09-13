<?php 

function display_items($item = null) {

    $items = array(
    "kamien"    => '<a href="?item=kamien">     <br/>   <img src="Zdjęcia/kamien.jpg" width="135" hight="135" alt="kamien">     </a>',
    "nozyczki"  => '<a href="?item=nozyczki">   <br/>   <img src="Zdjęcia/nozyczki.jpg" width="135" hight="135" alt="nozyczki"> </a>',
    "papier"    => '<a href="?item=papier">     <br/>   <img src="Zdjęcia/papier.jpg" width="135" hight="135" alt="papier">     </a>',
    );

    if($item == null):
        foreach($items as $item => $value):
            echo $value;
        endforeach;
    else:
        echo str_replace("?item={$item}","#", $items[$item]);
    endif;
}

function gra() {

    if(isset($_GET['item']) == TRUE):
        $items = array('kamien', 'nozyczki', 'papier');
        $user_item = strtolower($_GET['item']);
        $comp_item = $items[rand(0, 2)];

        if(in_array($user_item, $items) == FALSE):
            echo "Musisz wybrać kamien|nozyczki|papier";
            die;
        endif;

        if(
            $user_item == 'kamien'   && $comp_item == 'nozyczki' or
            $user_item == 'nozyczki' && $comp_item == 'papier' or
            $user_item == 'papier'   && $comp_item == 'kamien'   ):
                echo '<h2>Wygrałeś</h2>';
        endif;
                
        if(
            $comp_item == 'kamien'   && $user_item == 'nozyczki' or
            $comp_item == 'nozyczki' && $user_item == 'papier' or
            $comp_item == 'papier'   && $user_item == 'kamien'   ):
                echo '<h2>Przegrałeś</h2>';
        endif;

        if($user_item == $comp_item):
            echo '<h2>Remis</h2>';
        endif;

        display_items($user_item);
        display_items($comp_item);
        print('<input type = "button" name = "newgamebtn" value = "Play again" id = "butt" onclick = "window.location.href=\'index_gra.php\'">');
    else:
        display_items();
    endif;
    }
?>
