    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url(); ?>/assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="indexFO.html" class="current">Home</a></li>                        
    	</ul>
    </div> <!-- end of menu -->    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			<a href="subpage.html" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>
            <a href="#" style="margin-left: 50px;">Read more...</a>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <?php foreach($data_categorie as $data_categorie){?>
                    <li><a href="Produit_Categorie-<?php echo $data_categorie['ID']; ?>.html"><?php echo $data_categorie['CATEGORIE'];?></a></li>
                    <?php } ?>
            	</ul>
            </div>		                
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        <?php 
            if(isset ($page)) include $page.".php";
            else include "ListProduit.php";  
        ?>    
        </div>
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    <div id="templatemo_footer">
    
	       <a href="#">Home</a> | <a href="#">Search</a> | <a href="#">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> 
        <!-- Credit: www.templatemo.com -->	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<!-- templatemo 086 book store -->
<!-- 
Book Store Template 
http://www.templatemo.com/preview/templatemo_086_book_store 
-->
</body>
</html>