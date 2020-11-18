<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <div class='row'>
    <?php
    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $count = 0;
    foreach ($result as $key => $value) { 

        $count++;
        foreach($result->tracks->items as $key => $obb){
            
           
        echo    "<div class='col-md-4'>";
        echo      "  <div class='card' style='width: 100%;'>";
        echo          "<img src='".$obb->album->images[0]->url."' class='card-img-top' alt='...'>";
        echo         " <div class='card-body'>";
        echo            " <h5 class='card-title'>".$obb->album->name."</h5>";
                        
         echo             " <p class='card-text'>Artist :" .$obb->album->artists[0]->name."</p>";
                        
         echo              " <p>Release date :".$obb->album->release_date."</p>";
         
         echo            '<p class="card-text">Avaliable : '. sizeof($result->tracks->items[$key]->available_markets).  ' countries </p>';
         echo          " </div>";
        echo     " </div>";
         echo  " </div>";
         
        }
        
        $count++;
    }
    ?>
        
        </div>
    </div>
   
</body>

</html>