<!DOCTYPE html>
<html lang = "en">

    <head>

        <meta charset = "UTF-8">

        <title>Aula_01 PHP</title>

    </head>

    <body>

        <?php
            #region Arrays
            
                $N = ['Gabriel' , 'Guilherme' , 'Filipe'];
                echo $N[0].'<br />';
                echo $N[1].'<br />';
                echo $N[2].'<br />'.'<br />';

                $information['n'] = 'G';
                $information['i'] = 2;
                $information['c'] = 'F';
                echo $information['n'].'<br />';
                echo $information['i'].'<br />';
                echo $information['c'].'<br />'.'<br />';

            #endregion

            #region Vars & Consts

                define('NOME' , 'gab'); // Const
                echo NOME.'<br />'; // Const dec

                $nome = 'Gui'; // var 
                echo 'Meu nome é '.$nome.'<br />'.'<br />'; // var dec
           
            #endregion

            #region Concatenation

                $className = 'Box';
                $id = 5;

                echo 'o id é: '.$id.'<br />'.'<br />';

                echo "<div class = \"$className\"> </div>";

            #endregion

            #region Math

                $number = 5 + 5;
                $number1 = 10 - 4;
                
                $result = $number * $number1;
                $result1 = $result / 5;

                echo $result1.'<br />';

                $expression = 20 * (2 + 40) / 2;
                $rest = 1 % 2;

                echo $expression.'<br />'.
                $rest.'<br />'.'<br />';

            #endregion

        ?>
        
    </body>

</html>