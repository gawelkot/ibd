<?php

use Ibd\Ksiazki;
$ksiazki = new Ksiazki();
$bestsellery = $ksiazki->pobierzBestsellery();
?>
<div class="col-md-2">
	<h1>Bestsellery</h1>
        <?php foreach ($bestsellery as $bestslr) : ?>
            <a href="ksiazki.szczegoly.php?id=<?= $bestslr['id'] ?>" title="Szczegóły">
                <div style="display: flex; flex-direction: column; align-items: center; margin:8px 0; border-bottom: 2px solid black">
                    <?php if (!empty($bestslr['zdjecie'])) : ?>
                        <img src="zdjecia/<?= $bestslr['zdjecie'] ?>" alt="<?= $bestslr['tytul'] ?>"
                             class="img-thumbnail"/>
                    <?php else : ?>
                        brak zdjęcia
                    <?php endif; ?>
                    <p style="text-align: center">
                        <?= $bestslr['imie'] . ' ', $bestslr['nazwisko'] ?>
                    </p>

                    <p style="text-align: center">
                        <?= $bestslr['tytul'] ?>
                    </p>
                </div>
            </a>
        <?php endforeach;?>
</div>