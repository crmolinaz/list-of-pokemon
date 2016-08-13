<html>
    <head>
        <meta charset="UTF-8">
        <title>List of Pokémon</title>
        <link href="css/bootstrap.min.css" rel=stylesheet>
        <link href="css/main.css" rel=stylesheet>
    </head>
    <body>
        <div class="container container-pokemons">
            <div class="row container-wrap">
                <?php
                    for($i = 1; $i < 152; $i++) :
                ?>
                <?php $number = str_pad($i, 3, '0', STR_PAD_LEFT);?>
                <div class="card col-xs-3 center-block">
                    <div class="card-image-wrap">
                        <img src="<?=$number?>.png" class="card-image"/>
                    </div>
                    <div class="pokemon-number text-center">
                        #<?=$number?>
                    </div>
                </div>
                <?php endfor;?>
            </div>
        </div>
    </body>
</html>
