<?php include "../Vue/header.php";
mon_header("Léo Catifait Portefolio en ligne");
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dfde2568e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css" type="text/css"/>
    <title></title>
</head>
<body>
<h1>Kraystone</h1>
<section>
    <?php
        for ($x = 0; $x <= 16; $x++){
    ?>
    <div class="row">
        <div>
            &nbsp;
            <i class="fas fa-graduation-cap"></i>
            <i class="fas fa-code"></i>
            <i class="fas fa-desktop"></i>
            <i class="far fa-file-code"></i>
            <i class="fas fa-database"></i>
            <i class="fab fa-dev"></i>
            <i class="fab fa-github"></i>
            <i class="fas fa-university"></i>
            <i class="fab fa-linux"></i>
            <i class="fab fa-windows"></i>
            <i class="fas fa-graduation-cap"></i>
            <i class="fas fa-terminal"></i>
            <i class="fas fa-desktop"></i>
            <i class="far fa-file-code"></i>
            <i class="fas fa-database"></i>
            <i class="fab fa-dev"></i>
            <i class="fab fa-github"></i>
            <i class="fas fa-code-branch"></i>
            <i class="fas fa-book"></i>
        </div>
        <div>
            <i class="fas fa-graduation-cap"></i>
            <i class="fas fa-code"></i>
            <i class="fas fa-desktop"></i>
            <i class="far fa-file-code"></i>
            <i class="fas fa-database"></i>
            <i class="fab fa-dev"></i>
            <i class="fab fa-github"></i>
            <i class="fas fa-university"></i>
            <i class="fab fa-linux"></i>
            <i class="fab fa-windows"></i>
            <i class="fas fa-graduation-cap"></i>
            <i class="fas fa-terminal"></i>
            <i class="fas fa-desktop"></i> 
            <i class="far fa-file-code"></i>
            <i class="fas fa-database"></i>
            <i class="fab fa-dev"></i>
            <i class="fab fa-github"></i>
            <i class="fas fa-code-branch"></i>
            <i class="fas fa-book"></i>
        </div>
    </div>
<?php
        }
?>
</section>

</body>
<?php include "../Vue/footer.php";
mon_footer();
?>