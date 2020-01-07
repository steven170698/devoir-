<?php

       $age =readline("veillez saisir votre age:");
        
       if (($age>=3) and ($age<=12)){
           echo("enfant");
       }
        elseif (($age>=13) and ($age<=17)){
            echo("mineur");
        }
        elseif(($age>=18) and ($age<=54)){
            echo("majeur");
        }
        elseif($age>=55){
            echo("agé");
        }



?>