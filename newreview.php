<!DOCTYPE HTML>
<html>
    <head>
    <style type="text/css">
    body{
        background:#0a26fb;
        text-align: center;
    }
    .error{
        text-align: center;
        color: red;
        width: 30%;
        background-color:#eaf2ff;
        margin: auto auto;
        padding:10px;
    }
    .confirm{
        text-align: left;
        width: 30%;
        background-color:#eaf2ff;
        margin: auto auto;
        padding: 10px;
    }
    
    </style>

    <?php
        $filmy['Dramat'] = ["8 mila","Nietykalni","Dzień Świra"];
        $filmy['Komedia'] = ["American Pie","Kiler","Kac Vegas"];
        $filmy['Horror'] = ["To","Paranormal Activity","Egzorcyzmy Emily Rose"];
        $filmy['Thriller'] = ["Se7en","Milczenie owiec","Podziemny krąg"];
        $filmy['Film akcji'] = ["Fast and Furious","Uprowadzona","Transporter"];
        $filmy['Familijny'] = ["Epoka Lodowcowa","Shrek","Kevin sam w domu"];


        $user = $_POST['user'];
        $review = $_POST['review'];
        $title = $_POST['title'];
    ?>

    <?php
            define("EMPTY",0);
    
            function headNshoulders($error){
                print('<title>'.$error.'</title></head>
                <body>
                <div class=error>'
                    .$error.'<br>');
            }

            function endOfPage(){
                print('<button onclick="goBack()">Powrót do formularza</button>
                
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>
                </div>
                </body>
                </html>');
                die();
            }


            if(!preg_match('/[[:alnum:]]/',$user)){
                headNshoulders('Nieprawidłowa nazwa użytkownika');
                endOfPage();
            }
            
            else if(strlen($user)=="EMPTY" || strlen($title)=="EMPTY" || strlen($review)=="EMPTY"){
                headNshoulders('Uzupełnij wszystkie pola');
                endOfPage();
            }
            else if(!isset($_POST['category'])){
                headNshoulders('Wybierz kategorie');
                endOfPage();
            }
        ?>
        <title>Dodano nową recezję</title>
    </head>
    <body>
        <div class="confirm">
                Użytkowniku <b><i><?php $user ?></i></b>! Twoja recenzja została dodana!<br /><br />
                Tytuł filmu: <b><?php $title ?></b><br />
                Treść recenzji: <?php $review ?><br />
                Użytych znaków: <?php strlen($review)?><br />
                Wybrane kategorie: <br />
                
                <?php $category = $_POST['category']; 


                foreach ($category as $name){ 
                    echo "<b>".$name."</b><br />";
                }
                echo "<br />Spośród dostępnych: <br />";
                for(reset($filmy) ; $element = key($filmy) ; next($filmy)){
                    echo "<i>".$element."</i> | ";
                }
                
                echo('<br /><br /><b>Propozycje dla Ciebie:</b><br />');
                for($i=0;$i<3;$i++){
                    echo($filmy[$category[$i%count($category)]][$i].'<br />');
                }
                ?>
        </div>
    </body>
</html>