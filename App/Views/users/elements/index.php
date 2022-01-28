<?php include '../App/Views/users/shared/header.php'?>
    
<?php 
    $products = $args['products'];
    $categories = $args['categories']
?>

    <div class="container">
        <div class="main">
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
                    <div class="executive hidden-sm">
                        <img src="/assets_home/images/sidebar_banner.png" alt="">
                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="products">
                        <h2>Featured products</h2>
                        <div class="picture">
                            <div class="row">
                                <?php 
                                    foreach($products as $products) {
                                ?>
                                <div class="col-md-3 col-sm-4">
                                    <div class="sub-picture">
                                        <div class="memo">
                                            <img src="/<?php echo $products['images'] ?>">
                                        </div>
                                        <div class="price">
                                            <a href="product/detail?id=<?php echo $products['id'] ?>"><p><?php echo $products['name'] ?></p></a>
                                            <p class="dola">$<?php echo $products['price'] ?></p>
                                            <a href="/addProduct?id=<?php echo $products['id'] ?>" title=""><button type="submit">Add to Enquiry</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="view">
                            <button type="submit"><a href="#" title="">view all <i class="fas fa-angle-right"></i></a></button>
                        </div>
                        <div class="coaster hidden-sm">
                            <img src="/assets_home/images/content-banner1.png" alt="">
                            <button type="submit">
                                <a href="#" title="">
                                View now
                            <i class="fas fa-angle-right"></i>
                            </a>
                            </button>
                            <button class="sub-button" type="submit">
                                <a href="#" title="">
                                View now
                            <i class="fas fa-angle-right"></i>
                            </a>
                            </button>
                        </div>
                        <div class="sub-products">
                            <h2>NEW PRODUCTS</h2>
                            <div class="picture">
                            <div class="row">
                                
                            </div>
                        </div>
                            <div class="sub-view">
                            <button type="submit"><a href="#" title="">view all <i class="fas fa-angle-right"></i></a></button>
                             </div>
                        </div>
                        <div class="sub-products">
                            <h2>HOT FOR DOGS</h2>
                            <div class="picture">
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div class="sub-view">
                            <button type="submit"><a href="#" title="">view all <i class="fas fa-angle-right"></i></a></button>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../App/Views/users/shared/footer.php'?>