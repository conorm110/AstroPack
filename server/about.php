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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="queue.php">Queue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracking.php">Track <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/conorm110/AstroTalk" target="_blank">GitHub</a>
                </li>
        </div>
    </nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">About The Team</h1>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/purple.png" width=50%>
                    <p><b>Jonah (aka donutjonut)</b> - an imposter on the run from the law for making slideshows and cutting wires, there is never a challenge too difficult for this baka.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/pink.png" width=50%>
                    <p><b>Conor (aka mi1k)</b> - Professional among us player by day, coder by night, Conor spearheads this project with an innovative approach to astro radiology.</p>
                    <p></p> <!-- pp -->
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">How it Works</h1>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/setup.png" width=100%>
                </div>
                <div class="col-sm-6">
                    <h2>How the Parts Work Together</h2>
                    <p>
                        A radio transmitter recieves data from a 3.5mm audio jack and power from a 5v source. 
                        This feeds into a yagi antenna. The antenna is aligned with the target location via the 
                        telescope.
                    </p>
                    <p>
                        The radio is tuned to 244 MHz with a LC timing circuit. This frequency is able to escape Earth
                        as long as the radio is high enough power. The radio is custom made on perfboard for this purpose.
                        The yagi antenna is tunned to 244 Mhz to create a more focused beam making the signal cleaner and
                        easier to read after being slightly scrambled.
                    </p>
                    <p>
                        The photons in the radio signal do not dissipate in empty space meaning your audio file
                        is out in space forever, even after we are long gone.
                    </p>
                </div>
            </div>
        </div><hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>How to Use AstroTalk</h2>
                    <p>
                    AstroTalk allows anyone to send whatever audio file they want into space. Sending a message leaves a concrete impact
                    on the universe forever. You can send a message from a lost loved one, a meaningful song, AMOGUS, etc and always know
                    where and how far away that message is.
                    </p>
                    <p>
                        <b>Sending a Message</b>: To send a message, navigate to the Queue page and choose the MP3 you want to send. Then, select upload MP3. Your message gets added to a queue that will be send during the next listed AstroTalk broadcast.
                    </p>
                    <p>
                        <b>Tracking your Message</b>: To track a message, navigate to the track page. Enter your tracking ID and then press submit. If you do not remember your ID, you can use the table of all broadcasts to figure out your code. The distance the message is from earth, how long its been since the message was sent, and an estimate of the distance based on round trips to the Sun.
                    </p>
                </div>
                <div class="col-sm-6">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/abJIerk5-2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>