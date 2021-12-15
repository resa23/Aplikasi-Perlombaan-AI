<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <title><?= $judul; ?></title>
    <style>
        nav,
        .hero {
            font-family: 'Chela One', cursive;

        }

        .hero {
            text-shadow: 2px 2px black;
        }

        h3,
        h4 {
            font-family: 'Balsamiq Sans', cursive;
        }

        ml-auto,
        .mx-auto {
            margin-left: auto !important;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Artificial Intelligence</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" style="margin-left:700px;" href="<?= base_url("home/peserta"); ?>">Peserta</a>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <a class="nav-link active" href="<?= base_url("home/register"); ?>">Register</a>
                        <a class="nav-link active" href="<?= base_url("home/login"); ?>">Sign In</a>
                    <?php } else { ?>
                        <a class="nav-link text-danger" href="<?= base_url("home/logout"); ?>">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>