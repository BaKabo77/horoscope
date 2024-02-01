<html>
    <body>
    <form method="post" action="">
        <select name="horoscope" size="1">
            <?php foreach($signe as $cle => $valeur):?>
                <option value="<? $cle?>"<?= $cle?>> </option>
                <? endforeach ?>
            </select>
            <input type="submit" value="envoyer">
            
    </body>
</html>