<?php
$url = "https://apiv3.apifootball.com/?action=get_standings&league_id=152&APIkey=8eaf9bd67b39e9b309c307f6f61d768cf3146fdf8c2000f145f69dcd9e7248dc";
$data = file_get_contents('../data/response.json');
$table = json_decode($data, true);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="row">
            <?php ?>
            <div class="container text-center">
                <div class="col-md-2">
                    <div class="card mb-4">
                    <img src="https:\/\/apiv3.apifootball.com\/badges\/logo_country\/44_england.png" class="card-img-top" alt="England">
                        <div class="card-body">
                            <h5 class="card-title">England</h5>
                            <p class="card-text">#44</p>
                            <a href="3rd.php">
                                <button type="button" class="btn btn-primary">Lihat Liga</button>   
                            </a>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php ?>
        </div>

    </body>
</html>