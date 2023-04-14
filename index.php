<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main id="mainContainer">
        <?php include('./header.php');?>

        <section id="contentContainer">
        
            <?php

            if (array_key_exists('name', $_GET) && $_GET['name'] == 're4') {

                include('./re4Content.php');
            }

                else if (array_key_exists('name', $_GET) && $_GET['name'] == 'apex') {

                    include('./apexContent.php');
                }

                    else if (array_key_exists('name', $_GET) && $_GET['name'] == 'for-honor') {

                        include('./for-honorContent.php');
                    }

                        else if (array_key_exists('name', $_GET) && $_GET['name'] == 'r6') {
                            
                            include('./r6Content.php');
                        }

                            else { ?>

                                <h1>Welkom! kies één van de games hierboven.</h1>

                            <?php } ?>

            <?php include('./footer.php');?>

        </section>

    </main>
    
</body>
</html>