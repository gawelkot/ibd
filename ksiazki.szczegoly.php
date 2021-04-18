<?php

// jesli nie podano parametru id, przekieruj do listy książek
if(empty($_GET['id'])) {
    header("Location: ksiazki.lista.php");
    exit();
}

$id = (int)$_GET['id'];

include 'header.php';

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$dane = $ksiazki->pobierz($id);
?>

<h2><?=$dane['tytul']?></h2>

<p>
	<a href="ksiazki.lista.php"><i class="fas fa-chevron-left"></i> Powrót</a>
</p>

<div class="card">
    <div class="row">
        <div class="col-4">
            <?php if (!empty($dane['zdjecie'])) : ?>
                <img src="zdjecia/<?= $dane['zdjecie'] ?>" alt="<?= $dane['tytul'] ?>" class="img-thumbnail" />
            <?php else : ?>
                brak zdjęcia
            <?php endif; ?>
            <br>
            Cena: <?= $dane['cena'] ?> <br>
            Liczba stron: <?= $dane['liczba_stron'] ?> <br>
            ISBN: <?= $dane['isbn'] ?>
        </div>
        <div class="col-8">
            Opis: <br>
            <?= $dane['opis'] ?> <br>
        </div>
    </div>
    <div class="row">

    </div>
</div>

<?php include 'footer.php'; ?>