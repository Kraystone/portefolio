<?php include "../Vue/header.php";
mon_header("Léo Catifait Portefolio");
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
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title></title>
</head>
<body>
<h1 class="pseudo">Kraystone</h1>
<h2 class="specialite">Etudiant en Bachelor en tant que Concepteur Intégrateur DEVOPS</h2>
<?php include "../Vue/backgroundAnimated.php";
backgroundAnimated();
?>

<section>
    <div class="cards-list">

        <div class="card 1">
            <div class="card_image"> </div>
            <div class="card_title title-black">
                <p>Card Title</p>
            </div>
        </div>

        <div class="card 2">
            <div class="card_image">
            </div>
            <div class="card_title title-black">
                <p>Card Title</p>
            </div>
        </div>

        <div class="card 3">
            <div class="card_image">
            </div>
            <div class="card_title">
                <p>Card Title</p>
            </div>
        </div>

        <div class="card 4">
            <div class="card_image">
            </div>
            <div class="card_title title-black">
                <p>Card Title</p>
            </div>
        </div>

    </div>
</section>

</body>
<?php include "../Vue/footer.php";
mon_footer();
?>