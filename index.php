<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores inventore et nam. Maiores nam provident ea doloremque optio aperiam, placeat facere earum quasi nihil distinctio dolor nobis, quia perspiciatis magnam?';
    ?>

    <p> 
    <?php
        // stampa stringa
        echo $str;
    ?> 
    </p>

    <p> 
        il paragrafo è lungo 
        <strong>
            <?php
            // stampa lunghezza stringa 
            echo strlen($str);
            ?>
        </strong>
        caratteri.
    </p>

    <?php 
        $word = $_GET['word'];

        // replace case insensitive della parola nella query string
        $new_str = str_ireplace($word, '***', $str);
    ?>

    <p>
        <?php
        // stampa stringa modificata
        echo $new_str;
        ?>  
    </p>
</body>
</html>
