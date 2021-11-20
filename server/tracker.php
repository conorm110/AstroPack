<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>AstroTalk</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">AstroTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="queue.php">Queue</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tracking.php">Track <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/conorm110/AstroTalk">GitHub</a>
                </li>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Track Your Messages</h1>
                <p class="lead">

                    <?php
                    facts($_POST["idnum"]);
                    function facts($idnum)
                    {
                        try {
                            $json = file_get_contents('data/tracking.json');
                            $decoded_json = json_decode($json, true);
                            $tracking = $decoded_json['tracking'];
                            if (isset($tracking[$idnum])) {
                                $launchdata = $tracking[$idnum];
                            } else {
                                echo "<script>alert(\"Invalid Tracking ID\");</script>";
                                header("Refresh:0.01; url=http://astrotalk.tk/tracking.php");
                            }

                            $distance = timepassed($launchdata['date']) * 186282;
                            echo "Your message was sent into space " . time_elapsed_string($launchdata['date'], true) . "!";
                            echo "<br>Your message has travelled " . $distance . " miles! Thats " . ($distance / 91640000 / 2) . " round trips to the sun!";
                            echo "<br>Your message is " . (timepassed($launchdata['date']) / (31540000)) / $launchdata['dist'] . "% done with its trip to " . $launchdata['loc'];
                        } catch (Exception $e) {
                        }
                    }
                    function timepassed($datetime)
                    {
                        $now = new DateTime;
                        $ago = new DateTime($datetime);
                        $diff = $now->diff($ago);
                        $seconds = $diff->days * 86400 + $diff->h * 3600 + $diff->i * 60 + $diff->s;
                        return $seconds;
                    }
                    function time_elapsed_string($datetime, $full = false)
                    {
                        $now = new DateTime;
                        $ago = new DateTime($datetime);
                        $diff = $now->diff($ago);

                        $diff->w = floor($diff->d / 7);
                        $diff->d -= $diff->w * 7;

                        $string = array(
                            'y' => 'year',
                            'm' => 'month',
                            'w' => 'week',
                            'd' => 'day',
                            'h' => 'hour',
                            'i' => 'minute',
                            's' => 'second',
                        );
                        foreach ($string as $k => &$v) {
                            if ($diff->$k) {
                                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                            } else {
                                unset($string[$k]);
                            }
                        }

                        if (!$full) $string = array_slice($string, 0, 1);
                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>