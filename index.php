<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP HOTEL</title>
</head>
<body>

<!--
   Stampare tutti i nostri hotel con tutti i dati disponibili, iniziate in modo graduale.
   Prima stampate in pagina i dati, senza preoccuparvi dello stile.
   Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
   Bonus:
   1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
   2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
   NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
   Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
-->

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?> 

<div class="container ">
    <ol>
        <?php foreach ( $hotels as $element ) { ?>
            <li>
              <p>
                name : <?php echo $element['name']; ?>
              </p>
              <p>
                description : <?php echo $element['description']; ?>
              </p>
              <p>
                parking : <?php echo $element['parking']; ?>
              </p>
              <p>
                vote : <?php echo $element['vote']; ?>
              </p>
              <p>
                distance_to_center : <?php echo $element['distance_to_center']; ?>
              </p>

             
        </li>

        <?php } ?>
    </ol>
</div>

<div>
    <table class="table text-center">
        <?php foreach ( $hotels as $element ) { ?>
            <thead>
                <tr >
                    <th >Name</th>
                    <th >description</th>
                    <th > parking</th>
                    <th >vote </th>
                    <th > distance_to_center </th>
                </tr>
            </thead>
            <tbody>
                <tr >
                    <th scope="row">
                      <?php echo $element['name']; ?>
                    </th>
                    <td>
                       <?php echo $element['description']; ?>
                    </td>
                    <td>
                       <?php echo $element['parking']; ?>
                    </td>
                    <td>
                       <?php echo $element['vote']; ?>
                    </td>
                    <td>
                       <?php echo $element['distance_to_center']; ?>
                    </td>
                </tr>
            </tbody>

        <?php } ?>    
  
</table>
</div>


</body>
</html>