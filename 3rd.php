<?php
$url = "https://apiv3.apifootball.com/?action=get_standings&league_id=152&APIkey=8eaf9bd67b39e9b309c307f6f61d768cf3146fdf8c2000f145f69dcd9e7248dc";
$data = file_get_contents($url);
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
        <h2>Premier League Standings</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>Points</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table as $row): ?>
                    <tr>
                        <td><?= $row['overall_league_position']?></td>
                        <td><img src="<?= $row['team_badge'] ?>" width="24">&nbsp;&nbsp;<?= $row['team_name']?></td>
                        <td><?= $row['overall_league_payed']?></td>
                        <td><?= $row['overall_league_W']?></td>
                        <td><?= $row['overall_league_D']?></td>
                        <td><?= $row['overall_league_L']?></td>
                        <td><?= $row['overall_league_GF']?></td>]
                        <td><?= $row['overall_league_GA']?></td>
                        <td><?= $row['overall_league_PTS']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>