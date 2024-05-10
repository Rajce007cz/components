<?php
$this->extend("layout/layout");
$this->section("content"); ?>
            <div class="row m-3">
            <?php 
            foreach ($typC as $x) {  ?>
            <div class="p-2 col-4">
              <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title"><?= anchor('component/'.$x->url,$x->typKomponent)?></h5>
                  </div>
              </div>
            </div>
            <?php } ?>
          </div>

<?php 
  $this->endSection();?>