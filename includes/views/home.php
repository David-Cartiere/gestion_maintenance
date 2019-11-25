<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<style type="text/css">
   
    </style>
<body>
        <div class="container">
            <h1>Gestion des commandes</h1>
                <div class="row">
                     <div class="col-lg-6" style="border:1px solid #ddd;">
                        <h2>Demandes</h2>
                <?php  for($i=0; $i<count($commande); $i++): ?>
                  <article>
                      <ul>
                          <li><?= $commande[$i]->get_num_com()?> - <?= $commande[$i]->get_num_mag()?> - <?= $commande[$i]->get_num_ress()?> - <?= $commande[$i]->get_etat() ?></li>
                      </ul>
                        
                      
                  </article>
                <?php endfor; ?>
                </div>
                <div class="col-lg-6" style="border:1px solid #ddd;">
                <h2>En cours</h2>
                </div>
                </div>

                <div class="row" style="border:1px solid #ddd;" style="border:1px solid #ddd;">
                        <div class="col-lg-6">
                        <h2>Historique</h2>
                   </div>
                   <div class="col-lg-6" style="border:1px solid #ddd;">
                   <h2>Terminées</h2>
                   </div>
                   </div>
            </div>

            
</body>
</html>
