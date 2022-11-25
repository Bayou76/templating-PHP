<?php

    printf("<h1>Partie 1 :</h1> <br>");
    
    $fruits = ["fraises","banana","pommes","cerises","ananas"];

    //afficher le détail du tableau fruits
    print_r($fruits); 

    //afficher le nombre d’éléments
    echo "<br> Le nombre d'éléments :".count($fruits); 

    //parcourir le tableau et afficher les éléments un par un;
    for($i=0; $i<count($fruits);$i++){
        echo "<br>".$fruits[$i]."<br>";   
    }

    //parcourir le tableau et afficher les éléments un par un précédé par la clé;
    foreach($fruits as $keys => $valeur){
        echo "<br>".($keys+1)."=>".$valeur;
    } 

     //parcourir le tableau et afficher les éléments deux par deux : courant et suivant;
    for($i=0; $i<count($fruits);$i++){
        if($i<count($fruits)-1){
        echo "<br>".$fruits[$i]." ".$fruits[++$i];
        }
        if($i==count($fruits)-1){
            echo "<br>".$fruits[$i];
        }
    }

    echo '<br>';

    for($i = 0; $i< count($fruits)-1;$i++){
        echo ($i+1).')'.$fruits[$i].'->'.$fruits[$i+1]."<br>";
    }

    echo '<br>';

    printf("<h1>Partie 2 :</h1> <br>");

    $prix_euros = [101,42,7,28,62];

    //ordonner le tableau
    sort($prix_euros); 
    print_r($prix_euros);

    echo '<br>';

    //ajouter 10 euros à chaque prix
    for($i=0;$i<count($prix_euros);$i++){
        $prix_euros[$i] += 10 ;
        echo "le nouveau prix est de ".$prix_euros[$i]." € <br>";
    }

     //combiner les fruits et les prix pour obtenir une attribution de prix d’achats
    $arrayCombine = array_combine($fruits,$prix_euros); 
     print_r($arrayCombine);

     echo '<br>';

     foreach($arrayCombine as $key => $valeur){
        if($valeur <50){
            echo "<br>".$key;
        }
     } //afficher les fruits qui ont un prix inférieur à 50 euros

     echo '<br><br>';

     foreach($arrayCombine as $key => $valeur){
        if($valeur % 2 == 0){
            echo "<br>".$key;
        }
     } //afficher les fruits qui ont un prix pair

     echo '<br><br>';

     //Composer un panier de fruits ne dépassant pas 138 euros.
     $panier =[];
     
     foreach($arrayCombine as $key => $valeur){
        $som = 0;
        $som += $valeur;
       if($som + $valeur <= 138){
            $som += $valeur; 
            $panier[$key] = $arrayCombine[$key]; 
       }
     }

     var_dump($panier);

     echo '<br><br>';
     printf("<h1>Partie 3 :</h1>");
     echo '<h1> Des Fonctions et des points</h1> <br>';
     echo '<br><br>';


     //a)
     function fairePoint($x,$y){
        return [$x,$y];
     }

     print_r(fairePoint(5,6));

     echo '<br><br>';

     //b)

     function distPoint($point1,$point2){
        return sqrt(($point2[0] - $point1[0])**2 + ($point2[1] - $point1[1])**2);
     }

     print_r(distPoint(fairePoint(3,5),fairePoint(4,6)));
     
     echo '<br><br>';

     //c)
     function distCoords($x1,$y1,$x2,$y2){
        return distPoint(fairePoint($x1,$y1),fairePoint($x2,$y2));
     }

     print_r(distCoords(3,5,4,6));

     echo '<br><br>';

     //d)
     function faireVecteur($p1,$p2){
        return [$p2[0]-$p1[0], $p2[1]-$p1[1]];
     }

     print_r(faireVecteur(fairePoint(3,5),fairePoint(4,6)));

     echo '<br><br>';

     //e)

     function produitScalaire($v1,$v2){

        return ($v1[0]*$v2[0]) + ($v1[1]*$v2[1]);

     }

     print_r(produitScalaire(faireVecteur(fairePoint(3,5),fairePoint(4,6)),faireVecteur(fairePoint(3,6),fairePoint(7,8))));

     echo '<br><br>';

     function sontColineaire($v1,$v2){

        if((($v1[0]*$v2[1]) - ($v2[0]*$v1[1])) == 0){
            echo "les vecteur V1 et V2 sont colinéaire";
        }
        else{
            echo "les vecteur V1 et V2 ne sont pas colinéaire";
        }

     }

     print_r(sontColineaire(faireVecteur(fairePoint(1,3),fairePoint(3,0)),faireVecteur(fairePoint(2,6),fairePoint(6,0))));

     echo '<br><br>';
     printf("<h1>Partie 4 :</h1>");
     echo '<h1>Des Fonctions et des tableaux</h1> <br><br>';

    //a)
     function indexesPaire($tab){
        $tab2 = [];
        for($i = 0; $i<count($tab);$i++){
            if(count($tab) % 2 == 0){
                $tab2[] = $tab[$i];
                $i++;
            }
           
        }
        return $tab2;
     }

     print_r(indexesPaire(([2,4,4,6,7,4,6,7])));

     echo '<br>';

     //b)

     function valeursPaires($tab){

        $tab2 = [];
        for($i = 0; $i<count($tab);$i++){
            if($tab[$i] % 2 == 0){
                $tab2[] = $tab[$i];
            }
           
        }
        return $tab2;
     }

     print_r(valeursPaires(([2,4,4,6,7,4,6,7])));

     echo '<br>';

     //c)

     function divisible($tab,$e){
        $tab2 = [];
        for($i=0; $i<count($tab);$i++){
            if($tab[$i]%$e == 0){
                $tab2[] = $tab[$i];
            }
        }
        return $tab2;
     }

     print_r(divisible([3,9,12,3,],3));

     echo '<br>';

     //d)

     function sansDoublons($tab){
        return array_unique($tab);
     }
    print_r(sansDoublons(([2,4,4,6,7,4,6,7])));

    echo '<br>';

    //e)

    function intersection($t1,$t2){
        return array_intersect($t1,$t2);
    }

    print_r(intersection([2,4,4,6,7,4,6,7],[2,6,4,6]));

    echo '<br>';

    //f)

    function difference($t1,$t2){
        return array_diff($t1,$t2);
    }

    print_r(difference([2,4,4,6,7,4,6,7],[2,6,4,6]));

    echo '<br>';

    //g)

    function diff($t1,$t2,$sansDoublon = false){
        if($sansDoublon == true){
            return sansDoublons(difference($t1,$t2));
        }
        
     }

     print_r(diff([2,4,4,7,4,6,7],[2,6,4,6],true));

     echo '<br>';

    //h)

    function dernier($t,$n){
        return array_slice($t,-$n);
    }

    print_r(dernier(([2,4,4,6,7,4,6,7]),2));

    echo '<br><br>';
    printf("<h1>Partie 5 :</h1>");
    echo '<h1>Des fonctions et des chaines de caractères</h1> <br><br>';

    //a) 
    function plusLongueChaine($str1,$str2){
        if(strlen($str1)>strlen($str2)){
            return $str1;
        }
        else{
            return $str2;
        }
    }

    print_r(plusLongueChaine("coucou","hello World !"));

    echo '<br>';

    //b)

    function plusCourteChaine($t){
        $str ='';
        for($i=0; $i<count($t)-1;$i++){
            if(strlen($t[$i]) < strlen($t[$i+1])){
                $str = $t[$i];
            }
        }
        return $str;
    }

    print_r(plusCourteChaine(["hello","coucou","salut","hi","hola"]));

    echo '<br>';

    //c)
    function moyenneLongueur($t){
        $som = 0;
        for ($i=0; $i < count($t)-1; $i++) { 
            $som += strlen($t[$i]);
        }
        return $som /= count($t);
    }

    print_r(moyenneLongueur(["hello","coucou","salut","hi","hola"]));

    echo '<br>';

    //d)

    function commencePar($t,$letter){
        $tab=[];
        for ($i=0; $i < count($t) ; $i++) { 
            if($t[$i][0] == $letter ){
                $tab[] = $t[$i];
            }
        }
        return $tab;
    }

    print_r(commencePar(["hello","coucou","salut","hi","hola"],'h'));

    echo '<br>';

    //e)

    function finitPar($t,$letter){
        $tab=[];
        for ($i=0; $i < count($t) ; $i++) { 
            if($t[$i][-1] == $letter){
                $tab[] = $t[$i];
            }
        }
        return $tab;
    }

    print_r(finitPar(["hello","couco","salut","hi","hola"],'o'));

    echo '<br>';

    //f)
    function nbMots($p){
        return str_word_count($p);
    }

    print_r(nbMots('salut tout le monde'));

    echo '<br>';

    //g)

    function nbOccurencesMot($p,$m){
        $nb =0;
        $tab = explode(' ',$p);
        for ($i=0; $i < count($tab) ; $i++) { 
            if($tab[$i] == $m){
                $nb++;
            }
        }
        return $nb;
    }

    print_r(nbOccurencesMot('salut tout tout tout le monde','tout'));

?>
