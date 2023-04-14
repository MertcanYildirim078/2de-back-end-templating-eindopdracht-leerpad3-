<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Library</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <main id="mainContainer">

        <?php include('./header.php');?>

        <section id="contentContainer">
        
            <?php

            if (array_key_exists('name', $_GET) && $_GET['name'] == 're4') {

                include('./content/re4Content.php');
            }

                else if (array_key_exists('name', $_GET) && $_GET['name'] == 'apex') {

                    include('./content/apexContent.php');
                }

                    else if (array_key_exists('name', $_GET) && $_GET['name'] == 'for-honor') {

                        include('./content/for-honorContent.php');
                    }

                        else if (array_key_exists('name', $_GET) && $_GET['name'] == 'r6') {
                            
                            include('./content/r6Content.php');
                        }

                            else { ?>

                                <h1>Welkom! kies één van de games hierboven.</h1>

                            <?php } ?>
           
        </section>

        <?php include('./footer.php');?>

    </main>
    
</body>
</html>