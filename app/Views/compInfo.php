<?php
$this->extend("layout/layout");
$this->section("content"); ?>
            <div class="row m-3">
            <div class="p-2 col-4">
              <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title"><?= $com->nazev ?></h5>
                    <img class="card-img-top" src="<?= base_url('img/komponenty/'.$com->pic)?>">
                    <p class="card-text">Odkaz: <?= anchor("$com->odkaz")?></p>
                    <p class="card-text">Výrobce: <?=$com->vyrobce?></p>
                    <?php 
                    foreach ($parametr as $x) { ?>
                    <p class="card-text"><?=$x->nazevParametru?>: <?=$x->hodnota?></p>
                    <?php } ?>
                  </div>
              </div>
            </div>
        </div>

<?php 
  $this->endSection();?>