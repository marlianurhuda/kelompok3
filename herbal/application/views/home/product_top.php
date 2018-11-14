    <div class="container">
      <div class="row">
        <?php 
        foreach ($barang as $key => $value){
    ?>
        <div class="col-md-6 col-xl-3 p-b-60 m-lr-auto">
          <div class="block wrap-pic-w">
            <img src="<?php echo image_module('barang',$value['id'].'/'.$value['image']) ?>" style="height: 100%; width: 100%;" alt="IMG-BANNER">

            <a href="<?= site_url('admin/detail/'.$value['id']); ?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
              <div class="block1-txt-child1 flex-col-l">
                <span class="block1-name ltext-102 trans-04 p-b-8">
                  <?php echo $value['nama_barang'] ?>
                </span>

                <span class="block1-info stext-102 trans-04">
                  Rp <?php echo $value['harga'] ?>
                </span>
              </div>

              <div class="block1-txt-child2 p-b-4 trans-05">
                <div class="block1-link stext-101 cl0 trans-09">
                  Shop Now
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php
         } 
        ?>
      </div>
    </div>