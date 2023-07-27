<?php
    include "mutation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




    <section> 
        <button>
            <a href="main.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        </button>
        <button>
            <a href="main.php?lang=hy"><?php echo $lang['lang_hy'] ?></a>
        </button>


        <article>
            <?php echo $lang['art1'] ?>
        </article>
        <article>
            <?php echo $lang['art2'] ?>
        </article>
        <article>
            <?php echo $lang['art3'] ?>
        </article>
        <article>
            <?php echo $lang['art4'] ?>
        </article>

    </section>





</body>
</html>