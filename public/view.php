<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Pokedex</title>
</head>
<body>
    <main>
        <section class="left">
            <?php
                if (isset($pokemon -> data)) echo leftSection($pokemon -> data);
                else echo leftSection($default);
            ?>
        </section>
        <section class="right">
            <section class="top_right">
            <form method="post" action="">
                <label for="pokemon">search your pokemon</label>                
                <input id="pokemon" name="name" type="text" maxlength="20" placeholder="ID or NAME" value="<?php $inputValue;?>" autocomplete="off" autofocus>
                <input id="run" type="submit" name="submit" value="Submit">
            </form>
            </section>
            <section class="bottom_right">
                <section class="evolutions">
                    <?php
                        if (isset($evolPokemon -> data)) echo evolutionSection($evolPokemon -> data);
                    ?>
                </section>
                <section class="varieties"></section>
            </section>
        </section>
    </main>
</body>
</html>