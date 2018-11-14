		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<?php 
        foreach ($artikel as $key => $value){
    ?>
				<div class="item-slick1 bg-overlay1" style="background-image: url(<?php echo image_module('artikel',$value['id'].'/'.$value['image']) ?>);" data-thumb="<?php echo image_module('artikel',$value['id'].'/'.$value['image']) ?> " style="height: 50px; width: 50px;" data-caption="Women’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									<?php echo $value['title'] ?>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									New arrivals
								</h2>
							</div>
							
						</div>
					</div>
				</div>
<?php
         } 
        ?>
			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>