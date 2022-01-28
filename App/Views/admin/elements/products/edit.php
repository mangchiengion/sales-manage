<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php 
                $product = $args['product'];
                $categories = $args['categories']
            ?>
            <div class="pt-5 pl-5">
                <h2>Product / Edit / <?php echo $product['name']; ?></h2>
            </div>
            <div class="container p-5 my-5 border">
                <form action="/admin/product/edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required value="<?php echo $product['name']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="old_img" value="<?php echo $product['images']; ?>">
                        <label>Image</label><br>
                        <img src="/<?php echo $product['images'];?>"  width="30%" class="border mb-3"><br>
                        <input type="file" name="images">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" required value="<?php echo $product['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Sale</label>
                        <input type="text" name="sale" class="form-control" required value="<?php echo $product['sale']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" name="status" class="form-control" required value="<?php echo $product['status']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea rows="5" type="text" name="short_description" class="form-control" required><?php echo $product['short_description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" name="description" class="form-control" rows="7" required><?php echo $product['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option>--- Select category ---</option>
                            <?php
                                foreach($categories as $category) {
                            ?>
                            <option value="<?php echo $category['id'] ?>" <?php if($category['id'] == $product['id_category']) { ?> selected="selected" <?php } ?> ><?php echo $category['name'] ?></option>
                        <?php } ?>
                        </select>
                    </div><br>
                    <div class="form-group text-right">
                        <button name="update" type="submit" class="btn btn-success">Update</button>
                        <button name="reset" type="reset" class="btn btn-secondary" onclick="myFunction()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<script type="text/javascript">
    function myFunction() {
         window.location="/admin/product/list";
    }
</script>