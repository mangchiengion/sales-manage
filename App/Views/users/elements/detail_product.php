<?php include '../App/Views/users/shared/header.php'?>
    
<?php
    $product = $args['product'];
    $products = $args['products'];
    $categories = $args['categories']
?>

    <div class="container">
        <div class="main">
            <div class="icon-product">
                    <div class="icon-home">
                        <a href="#" title="">
                            <i class="fas fa-home"></i>
                        </a>                    
                    </div>                        
                    <div class="about-us">
                        <i class="fas fa-chevron-right"></i>
                        <a href="#" title="">Our Product</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="#" title=""><?php echo $product['name']; ?></a>
                    </div>                       
                </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="new hidden-sm">
                        <ul>
                            <?php 
                                $i=1;
                                foreach($categories as $categories) {
                            ?>
                            <li>
                                <a href="#"><?php echo $categories['name'] ?></a>
                                <i class="fas fa-angle-right"></i>
                            </li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="note-book">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="picture-book">
                                    <img src="/<?php echo $product['images'] ?>">
                                </div>               
                            </div> 
                            <div class="col-md-7">
                                <div class="note">
                                    <div class="sub-note-book">
                                        <h4><?php echo $product['name'] ?></h4>
                                        <p>
                                            <?php echo $product['short_description'] ?>
                                        </p>         
                                    </div>
                                    <div class="enquiry">
                                        <h3>$<?php echo $product['price'] ?></h3>
                                        <a href="#" title=""><button type="submit">Enquiry Now</button></a>  
                                    </div>
                                    <div class="picture-note">
                                        <img src="assets/images/icon-product.png" alt="">  
                                    </div>
                                </div>   
                            </div>          
                        </div>                        
                    </div>
                    <div class="description">
                        <div class="sub-description">
                            <p>Description</p>       
                        </div>
                        <div class="text-product">
                            <p><?php echo $product['description'] ?></p>                  
                        </div>
                    </div>
                    <div class="related">
                        <div class="products">
                        <h2>related products</h2>
                        <div class="picture">
                            <div class="row">
                                <?php 
                                    foreach($products as $data) {
                                        if ($data['id_category'] == $product['id_category']) {
                                            
                                ?>
                                <div class="col-md-3 col-sm-4">
                                    <div class="sub-picture">
                                        <div class="memo">
                                            <img src="/<?php echo $data['images'] ?>">
                                        </div>
                                        <div class="price">
                                            <a href="product/detail?id=<?php echo $data['id'] ?>"><p><?php echo $data['name'] ?></p></a>
                                            <p class="dola">$<?php echo $data['price'] ?></p>
                                            <a href="#" title=""><button type="submit">Add to Enquiry</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>           
    </div>
</div>

<?php include '../App/Views/users/shared/footer.php'?>