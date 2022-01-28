<?php include '../App/Views/admin/shared/dashboard.php'; ?>
<?php 
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
?>
<?php 
    $product = $args['product'];
    $categories = $args['categories']
?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
        	<div class="pt-5 pl-5">
        		<h2>Product / List</h2>
        	</div>

        	<div class="p-5">
        		<table class="table table-bordered table-hover text-center bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th width="30%">Product</th>
                            <th width="20%">Short description</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Option</th>   
                        </tr>
                    </thead>
                    <?php 
                        $i=1;
                        foreach($product as $product) {
                    ?>
                    <tr>
                        <td class="align-middle">
                            <?php echo $i;
                            $i++;?>
                        </td>
                        <td class="align-middle">
                            <?php
                                echo "<img src='/".$product['images']."' alt='' width='30%'>";
                                echo $product['name'];
                            ?>
                        </td>
                        <td class="align-middle">
                            <?php echo limit_text($product['short_description'], 10) ;?>
                        </td>
                        <td class="align-middle">
                            <?php echo $product['price'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $product['sale'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $product['status'];?>
                        </td>
                        <td class="align-middle">
                            <?php
                                foreach($categories as $category) {
                                    if($product['id_category'] == $category['id']) { 
                                        echo $category['name']; 
                                    }
                                }
                            ?>
                        </td>
                        <td class="align-middle">
                            <a href="/admin/product/edit?id=<?php echo $product['id'] ?>" title="" class="btn btn-link">Edit</a>
                            <button class="btn btn-link" onclick="myFunction()">Delete</button>
                        </td>
                    </tr>

                    <?php        
                        }
                    ?>     
                </table>
        	</div>
        </div>
    </section>

<script type="text/javascript">
    function myFunction() {
      let text = "Are you sure you want to delete?";
      if (confirm(text) == true) {
        location.href = "/admin/product/delete?id=<?php echo $product['id'] ?>";
      } else {
        window.location="/admin/product/list";
      }
      document.getElementById("demo").innerHTML = text;
    }
</script>