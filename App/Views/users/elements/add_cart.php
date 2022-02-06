<?php include '../App/Views/users/shared/header.php'?>
    
<?php 
    $products = $args['products'];
    if(isset($args['id'])) {
        $product_id = $args['id'];

        if(isset($_SESSION['enquery'][$product_id])) {
            $_SESSION['enquery']['product_id']['sl'] += 1; // Neu da co san pham trong gio hang thi so luong san pham do them 1
        } else {
            $_SESSION['enquery']['product_id'] = array('id' => $product_id , 'sl' => 1);
        }
    }

    echo "window.location.href='http://mvc/'";
?>


<?php include '../App/Views/users/shared/footer.php'?>