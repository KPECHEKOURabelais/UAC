<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.html'); ?>

        <section id="accueil">
            <article>
            <h2> Rab Store, la bibliothèque des mathématiques et de la littérature </h2>
            <div class="row">
                <div class="col-lg-4">
                   <img src="voltaire.jpg" alt=" voltaire">
                </div>
                <div class="col-lg-8">
                        <p>
                        Célèbre écrivain, poète et philosophe français, François Marie Arouet, dit Voltaire, est né à Paris le 21 novembre 1694 et meurt le 30 mai 1978.
                        </p>
                        <div class="citation">
                        <h3>  Citation de Voltaire  </h3>
                        <p> << Un esprit cultivé ne nuit point au courage. >> <br>
                        Voltaire ; Charlot ou la comtesse de Givry, I, V (1767) </p>
                        </div>
                </div>    
            </div>
            <div class="auteur">
                    <img src="lagrange.png" alt="Lagrange">
                    <div class="description1">
                        <p>
                            Né en 1736 et mort à Paris en 1813, Joseph Louis de Lagrange fut un mathématicien, mécanicien etc. 
                        </p>
                        <div class="oeuvre">
                        <h3>  Son oeuvre  </h3>
                        <p>
                            Il est le fondateur du calcul des variations, avec Euler, et de la théorie des formes quadratiques. <br>
                            En physique, en précisant le principe de moindre action, avec le calcul des variations, vers 1756, il invente la fonction de Lagrange, qui vérifie les équations de Lagrange, puuis développe la mécanique analylitique, vers 1788.
                            Il a bien aussi mené des recherches dans le domaine de l'astronomie. 
                        </p>
                        </div>
                    </div>  
                    
            </div>
            <div class="auteur">
                    <img src="Blaise-Pascal.jpg" alt="Blaise-Pascal">
                    
                    <div class="description1">
                        <p>
                            Né le 19 juin 1623 à Clermont et mort le 19 août 1662 à Paris, Blaise Pascal est un mathématicien, 
                            physicien, philosophe, moraliste et théologien français. 
                        </p>
                        <div class="oeuvre">
                        <h3> Oeuvre et Citation   </h3>
                        <p>
                            A l'âge de 19 ans, il invente la première machine à calculer et après trois ans de développpement et une cinquantaine de prototypes. 
                            Il la présente à ses contemporains en la dédiant au chancelier Séguier.
                            <br>
                            <strong> Citation populaire : </strong><br>
                            << Le coeur a ses raisons que la raison elle-même ignore. >>
                            
                        </p>
                        </div>
                    </div>    
            </div>
            </article>
            
        </section>
    <?php include('footer.html'); ?>
</body>
</html>