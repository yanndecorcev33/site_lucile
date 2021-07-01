<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="description" content="Mon premier portfolio responsive utilisant la technologie php">
  <meta name="keywords" content="HTML, CSS, php, portfolio">
  <meta name="author" content="Yann D.">
  
    <title>Le site de Lucile</title>
</head>

<body>
    <?php
        $images=["image1.jpg","image2.jpg","image3.jpg"];
        $titles=["titre1","titre2","titre3"];
        $texts=["Les deux hommes entourent David et le conduisent à la voiture, un Espace, garé devant sa maison. 
        Il se dit que ce serait bien si sa voisine pouvait le voir comme ça, entouré de deux gardes du corps. Ça fait ‘pro’. 
        Et comme tous les matins, sa voisine Florence le regarde partir, mais cette fois-ci entouré de deux gros gars baraqués, 
        rasés au plus près, menton et crâne. Un peu plus les pieds sur terre et surtout plus réveillée, elle ne trouve pas cette scène très drôle. 
        Il faudra qu’elle vienne le voir ce soir, à son retour, pour lui demander de quoi il s’agissait.",
        "Florence venait d’avouer quelque chose qu’elle n’osait même pas dire à la personne concernée : David. « Son » David. Oui, elle l’aimait. 
        Depuis qu’il avait emménagé à côté de chez elle, il y a de ça cinq ans. Depuis le premier regard, elle savait que c’était lui. Et à chaque 
        fois la même chose : dès qu’elle parlait de lui, dès qu’elle pensait à lui, ses yeux brillaient.",
        "David comprenait très bien où voulait en venir Prélude. Lorsqu’il l’avait créé, il détestait ce monde. 
        S’il avait eu la possibilité de le changer, il l’aurait certainement fait. Il l’aurait fait en pensé, mais pas en geste. 
        David n’était pas du genre méchant. Jamais il n’aurait fait de mal à qui que ce soit, mais il avait 
        certainement mis cette idée dans la programmation de Prélude sans le vouloir."];
        
    ?>
    <header>
        <div class="row justify-content-end mr-5">
                <?php
                    $date = date("d-m-Y");
                    $heure = date("H:i");
                    echo "Nous sommes le ".$date." et il est ".$heure.".";
                ?>
        </div>
        <div class="row justify-content-center header">
            <h1>Le super site de Lucile</h1>
            
        </div>
      
    </header>
    <main>
        <div class="container">
            <?php 
                
                for($i=0; $i<count($images); $i++){
                    
                    echo ' 
                    <div class="bordure">
                        <div class="row no-gutters justify-content-center text-uppercase">
                            <h2>'.$titles[$i].'</h2>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-6 col-md-4">
                                <img src="assets/img/'.$images[$i].'" alt="une belle image de peinture" class="image">
                            </div>
                            <div class="col-12 col-sm-6 col-md-8">
                                <p>'.$texts[$i].'</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>

</html>