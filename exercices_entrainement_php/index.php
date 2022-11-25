<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exercices entraînement PHP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/logo-creative.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
	<div class="bg-img1 size1 flex-w flex-c-m p-t-20 p-b-55 p-l-15 p-r-15">
		<div class="wsize1 bor1 bg1 p-b-45 p-l-15 p-r-15 p-t-20 respon1">
			<div class="wrappic1">
				<img src="assets/logo-creative.svg" width="75px" alt="Logo Créative">
			</div>
			<p class="txt-center m1-txt1 &p-t-33 p-b-68">
				Exercices entraînement PHP
			</p>
            <div class="alert alert-info text-justify">
                <p>
                    Réalisez les deux premiers exercices afin d'obtenir un affichage similaire à celui du fichier image fourni. Le troisième exercice est plus libre, vous n'avez pas à chercher à reproduire l'affichage du fichier image. Pour le quatrième exercice vous devez obtenir un affichage similaire à l'exemple. Vous devez en priorité vous concentrer sur les trois premiers exercices, traitez le quatrième si vous avez bien compris et bien réalisé les autres.
                </p>
                <p class="p-t-10 font-weight-bold">
                    Remarques :
                </p>
                <ul class="p-l-50">
                    <li>Vous complèterez le fichier php avec votre code à chaque endroit
                        où il est écrit <code>TODO</code> dans un commentaire.</li>
                    <li>Lisez attentivement les commentaires dans le fichier php: ils
                        contiennent beaucoup d'informations sur le travail à effectuer.</li>
                    <li>Il n'est pas demandé de rendre la page plus "agréable à l'oeil"
                        grâce à des styles supplémentaires : ce n'est pas l'objet de ce cours, mais vous pouvez bien entendu le faire.</li>
                    <li>N'oubliez pas de travailler sur un serveur local !</li>
                </ul>
            </div>

            <!-- Exercice 1 -->
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold">Exercice 1 :</span> (temps restant avant échéance): de l'intérêt des pages dynamiques.
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?php
                        /**
                         * DESCRIPTION DE L'EXERCICE 1 :
                         *   Le but de cet exercice est d'observer, sur un exemple concret et simple,
                         *   le potentiel d'une page web dynamique telle qu'on peut en réaliser avec
                         *   PHP. Quand vous aurez compris la page à réaliser, vous pouvez vous poser
                         *   la question suivante : était-il possible de faire une page similaire
                         *   avec une page statique (html+css) ?
                         *
                         *   On va construire une page qui réalise une action en fonction de la date
                         *   précise du chargement de la page. Pour fixer les idées, prenons une
                         *   action basique : la page indiquera dans combien de temps a lieu l'examen 
                         *   final de cette matière (c'est fictif). Cet indicateur sera toujours correct à chaque
                         *   nouvelle visite ou actualisation de la page (bien sûr, sans que le
                         *   dév doive intervenir à chaque fois que la page est demandée !).
                         */
                        /**
                         * REMARQUES sur le code ci-dessous :
                         *  - La fonction PHP "mktime" renvoie la date informatique (en secondes) à
                         *  partir d'une heure au format "classique" ; pour plus de détails, voir
                         *  http://php.net/manual/fr/function.mktime.php
                         *  - Cela dit, il n'est pas nécessaire de maîtriser "mktime" pour résoudre
                         *  l'exercice : de nombreuses pistes sont possibles pour arriver à un résultat similaire
                         *  - ici, pour l'échéance nous avons indiqué la date du partiel final : le 08
                         *  décembre 2022 à 09h00m00s. Vous pouvez modifier cette date pour faire des
                         *  expériences, mais merci de la remettre à la valeur ci-dessus dans le
                         *  fichier que vous m'enverrez.
                         */
                        ?>
                        <?php

                            // TODO
                            $exam = mktime(9,0,0,12,8,22);
                            $tmprestant = $exam - time();
                            $M_restantes = $tmprestant / 60;
                            $H_restantes = $M_restantes / 60;
                            $D_restants = $H_restantes / 24;

                            $s_restantes = $tmprestant % 60; // Secondes restantes
                            $M_restantes = $M_restantes % 60; // Minutes restantes
                            $H_restantes = $H_restantes % 24; // Heures restantes
                            $D_restants = floor($D_restants);
                            echo "L'examen aura lieu dans ".$D_restants." jours, ".$H_restantes." heures,".$M_restantes." minutes et ".$s_restantes." secondes";
                        ?>
                    </div>
                </div>
            </div>

            <!-- Exercice 2 -->
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold">Exercice 2 :</span> (statistiques étudiants): utiliser une boucle for et des structures conditionnelles.
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?php
                        /**
                         * OBJECTIFS DE L'EXERCICE 2 :
                         *   obtenir le même affichage que dans la capture d'écran
                         * RÈGLE :
                         *   - le code doit utiliser une ou des boucle(s) for et une ou des structure(s)
                         *   conditionnelle(s) (if, switch, etc.)
                         *   - le code ne doit pas être écrit spécifiquement pour l'exemple de groupe
                         *   donné ci-dessus.
                         * CONSEIL À RETENIR (en relation avec la deuxième règle) :
                         *   Prenez l'habitude de rendre votre code facilement réutilisable. Par
                         *   exemple, si vous avez besoin du nombre d'entrées dans le tableau
                         *   "_etudiants", n'utilisez pas la vraie longueur du tableau même si vous
                         *   la connaissez (pour le tableau au-dessus, c'est 5), mais plutôt
                         *   "count($_etudiants)". De cette manière, si le tableau venait à être
                         *   modifié, votre code fonctionnera toujours.
                         */

                        $_etudiants = array(
                            'Arthur A.' => array(
                                'email'       => 'arthur.a@email.com',
                                'note'        => 12,
                                'commentaire' => "Bon travail d'ensemble malgré des erreurs syntaxiques."
                            ),
                            'Josiane J.' => array(
                                'email'       => 'josiane.j@email.com',
                                'note'        => 9,
                                'commentaire' => "De trop nombreux exercices n'ont pas été traités ! Dommage..."
                            ),
                            'Fred F.' => array(
                                'email'       => 'fred.f@email.com',
                                'note'        => 15,
                                'commentaire' => "Bon travail. Certaines réponses auraient pu être davantage développées."
                            ),
                            'Julie J.' => array(
                                'email'       => 'julie.j@email.com',
                                'note'        => 18,
                                'commentaire' => "Excellent travail ! Félicitations !"
                            ),
                            'Jean-Michel J.' => array(
                                'email'       => 'jean-michel.j@email.com',
                                'note'        => 3,
                                'commentaire' => "Avez-vous réellement traité le sujet ?"
                            )
                        );
                        ?>
                        <?php

                        // TODO
                        

                        foreach($_etudiants as $keys => $info) { 
                                echo '<strong>'.$keys.'</strong>'." (".$_etudiants[$keys]['email'].")"." a obtenue ".$_etudiants[$keys]['note']."/20 : ".$_etudiants[$keys]['commentaire'];
                                echo '<br><hr>';
                        }

                        function noteCumulées($t){
                            $total = 0;
                                foreach($t as  $info) { 
                                    $total +=  $info['note'];
                                }
                                return $total;
                        }

                        function noteSaisie($t){
                            $noteSaisie = 0;
                            foreach($t as  $info) {
                                if(isset($info['note'])){
                                    $noteSaisie++;
                                }
                            }
                            return $noteSaisie;
                        }
                        function moyenneClasse($t){
                            return noteCumulées($t)/count($t);
                        }

                        function noteInferieur10($t){
                            $som = 0;
                            foreach($t as $info) { 
                                if($info['note']<10){
                                    $som++;
                                }
                            }
                            return $som;
                        }

                        function noteSupEgalea10($t){
                            $som = 0;
                            foreach($t as $info) { 
                                if($info['note']>=10){
                                    $som++;
                                }
                            }
                            return $som;
                        }

                        function noteSupMoy($t){
                            $som = 0;
                            foreach($t as $info) { 
                                if($info['note']>moyenneClasse($t)){
                                    $som++;
                                }
                            }
                            return $som;
                        }



                        echo 'Concernant les notes : ';
                        echo '<ul style="margin-left:50px;">';
                        echo '<li> Le total des notes cumulées est de : '.noteCumulées($_etudiants);
                        echo '<li> le nombre total de note saisies est de : '.noteSaisie($_etudiants).'</li>';
                        echo '<li> La moyenne de ma classe est de : '.moyenneClasse($_etudiants).'/20 </li></ul>';

                        echo '<br> mais on peut aussi dire que :';
                        echo '<ul style="margin-left:50px;">';
                        echo '<li> il y a '.noteInferieur10($_etudiants).' notes en dessous de 10/20 </li>';
                        echo '<li> il y a '.noteSupEgalea10($_etudiants).' notes au dessus de (ou égales à) 10/20 </li>';
                        echo '<li> il y a '.noteSupMoy($_etudiants).' notes en dessus de la moyenne de la classe </li></ul>';
                        

                        
                        ?>
                    </div>
                </div>
            </div>

            <!-- Exercice 3 -->
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold">Exercice 3 :</span> Définir des résultats en se basant sur une boucle WHILE
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?php
                        /**
                         * DESCRIPTION DE L'EXERCICE 3 :
                         * En vous basant sur le tableau PHP "$_couleurs" et sur l'utilisation d'une boucle while,
                         * parcourez chaque élement du tableau, où à chaque passage, un compteur va s'incrémenter
                         * de la taille de la chaine de caractère en cours. Tant que le compteur n'aura pas dépassé
                         * une somme totale de 25 caractères, les éléments seront parcourus. La totalité du calcul
                         * et du traitement devront se faire de manière dynamique et non figée, quel que soit le
                         * contenu et la taille du tableau de couleurs.
                         */

                        $_couleurs = array(
                            'jaune',
                            'bleu',
                            'vert',
                            'noir',
                            'blanc',
                            'rose',
                            'gris',
                            'rouge',
                            'orange'
                        );
                        ?>
                        <?php

                        // TODO

                        echo '<strong>Début du traitement</strong><br>';

                        $nbcaractere=0;
                        $i =0;
                        while($nbcaractere <= 25){
                            $nbcaractere += strlen($_couleurs[$i]);
                            echo 'Le mot <span style="color:deeppink;">'.$_couleurs[$i].'</span> est composé de 5 caractères. Le total du compteur est désormais de <strong>'.$nbcaractere.'</strong><br>';
                            $i++;
                        }

                        echo '<br><strong>Début du traitement</strong><br>';
                        echo 'Le compteur a dépassé la limmite de <strong>25</strong> caractères, avec un total de '.$nbcaractere." Le calcul s'est arrété avant la couleur <span style='color:deeppink;'>".$_couleurs[$i].'</span>.';

                        
                        ?>
                    </div>
                </div>
            </div>

            <!-- Exercice 4 -->
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold">Exercice 4 :</span> (classement de personnages): utiliser des fonctions et des boucles.
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <?php
                        /**
                         * DESCRIPTION DE L'EXERCICE 4 :
                         * Un tableau PHP contient des informations concernant des personnages & leurs scores
                         * Vous devez :
                         *      - trier les données afin d'afficher la liste des personnages, du plus haut score au plus bas
                         *      - afficher les informations des personnages dans un tableau HTML comme dans la capture écran
                         *      - afficher la position du personnage dans le classement
                         *      - si le score d'un personnage est supérieur à 100, sa ligne devra être en vert
                         *      - si le score d'un personnage est inférieur à 0, sa ligne devra être en rouge
                         *
                         * Pour réaliser votre traitement, vous utiliserez les deux fonctions fournies qu'il vous
                         * faudra elles aussi compléter.
                         */
                        $_personnages = array(
                            array(
                                'nom'   =>  "Arthur",
                                'score' =>  234
                            ),
                            array(
                                'nom'   =>  "Karadoc",
                                'score' =>  12
                            ),
                            array(
                                'nom'   =>  "Perceval",
                                'score' =>  42
                            ),
                            array(
                                'nom'   =>  "Lancelot",
                                'score' =>  103
                            ),
                            array(
                                'nom'   =>  "Merlin",
                                'score' =>  -10
                            ),
                            array(
                                'nom'   =>  "Leodagan",
                                'score' =>  232
                            ),
                            array(
                                'nom'   =>  "Méléagan",
                                'score' =>  34
                            ),
                            array(
                                'nom'   =>  "La Dame du Lac",
                                'score' =>  -51
                            )
                        );

                        function retourne_ligne($position, $nom, $score){
                            $ligne = $position.$nom.$score;
                            return $ligne ;
                        }

                        function tri_tableau($_personnages){

                            // TODO

                            $columns = array_column($_personnages, 'score');
                            array_multisort($columns, SORT_DESC, $_personnages);

                            return $_personnages;
                        }

                        // function color($tab){
                        //     for($i=0; $i<count($tab);$i++){
                        //         if($tab[$i]['score']>100){
                        //             $color = "green";
                        //         }
                        //         if($tab[$i]['score']<0){
                        //             $color = "red";
                        //         }
                        //         return $color;
                        //     }
                        // }
                        


                        ?>
                        <?php

                        // TODO

                        echo 'Classement des personnages<hr><br>';
                        echo '<table style="width:100%;">';
                        echo '<tr style="border-bottom:2px solid gray;">';
                        echo '<th>Possition</th>';
                        echo '<th>Nom</th>';
                        echo '<th>Score</th></tr>';
                        
                        $_personnages = tri_tableau($_personnages);
                        
                        retourne_ligne($i+1,$_personnages[$i]['nom'],$_personnages[$i]['score']);

                        for($i=0; $i<count($_personnages);$i++){
                            if($_personnages[$i]['score']>100){
                                echo '<tr style="background-color:green; border-bottom:2px solid gray; color : white;"><td style = "padding:20px;">'.$i.'</td><td>'.$_personnages[$i]['nom'].'</td><td>'.$_personnages[$i]['score'].'</td></tr>';
                            }
                            if($_personnages[$i]['score'] > 1 &&  $_personnages[$i]['score'] < 99){
                                echo '<tr style="background-color:white; border-bottom:2px solid gray;  color :black;"><td  style = "padding:20px;">'.$i.'</td><td>'.$_personnages[$i]['nom'].'</td><td>'.$_personnages[$i]['score'].'</td></tr>';
                            }
                            if($_personnages[$i]['score']<0){
                                echo '<tr style="margin:50px; background-color:red; border-bottom:2px solid gray;  color : white;"><td  style = "padding:20px;">'.$i.'</td><td>'.$_personnages[$i]['nom'].'</td><td>'.$_personnages[$i]['score'].'</td></tr>';
                            }
                        }
                        echo '</table>';
                       
                        ?>
                    </div>
                </div>
            </div>

		</div>
	</div>
</body>
</html>