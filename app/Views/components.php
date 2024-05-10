<?php
$this->extend("layout/layout");
$this->section("content"); ?>
            <div class="row m-3">
            <?php 
            foreach ($com as $x) { ?>
            <div class="p-2 col-4">
              <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title"><?= anchor('info/'.$x->id,$x->nazev)?></h5>
                  </div>
              </div>
            </div>
            <?php } ?>
            <?php echo $pager->links();?>
        </div>
<?php 
  $this->endSection();?>