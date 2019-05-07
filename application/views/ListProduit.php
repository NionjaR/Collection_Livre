<?php $compt=0; foreach($data_livre as $data_livre) { ?>
            
            <div class="templatemo_product_box">
                <h1><?php echo $data_livre['NAME_BOOK']; ?> <span></span></h1>
                
                <div class="image_panel">
                    <img src="<?php echo base_url(); ?>/assets/images/<?php echo $data_livre['NAME_BOOK']?>.jpg" alt="image"  width="100" height="140"/>
                </div>

                <div class="product_info">  
                	<p>Etiam luctus. Quisque facilisis suscipit elit. Curabitur...</p>
                  <h3><?php echo $data_livre['DATE_ENTER']; ?></h3>
                    <div class="detail_button"><a href="Fiche_Produit-<?php echo $data_livre['ID'] ;?>.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
                
            </div>
            
            
            <?php } ?>
            <div class="cleaner">&nbsp;</div>
            <div class="cleaner_with_width">&nbsp;</div>    
            
            <a href="#"><img src="<?php echo base_url(); ?>/assets/images/templatemo_ads.jpg" alt="ads" /></a>
        <!-- end of content right -->
    