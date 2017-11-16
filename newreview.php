<!DOCTYPE HTML>
<html>
    <head>

    <?php
        $filmy['dramat'] = ["8 mila",""];
    ?>

    <?php

            $user = $_POST['user'];
            $review = $_POST['review'];
            $title = $_POST['title'];
            
            if(!preg_match('/[[:alnum:]]/',$user)){
                print('<title>Nieprawidłowa nazwa użytkownika</title>
                </head>
                <body>
                <div class=error>
                    Nieprawidłowa nazwa użytkownika<br>
                    <button onclick="goBack()">Powrót do formularza</button>
                
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                <div>
                </body>
                </html>');
                die();
            }
        ?>
        <title>Dodano nową recezję</title>
    </head>
    <body>
        <div class="confirm">
            <?php
                echo("Użytkowniku <b><i>".$user."</i></b>! Twoja recenzja została dodana!<br />");
                echo("Tytuł filmu: <b>".$title."</b><br />");
                echo('Treść recenzji: '.$review)."<br />";
                echo('Użytych znaków: '.strlen($review)."<br />");
                
                $category = $_POST['category'];

                foreach ($category as $name){ 
                    echo $name."<br />";
                }

                

            ?>
        </div>
    </body>
</html>