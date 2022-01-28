<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
        	<div class="pt-5 pl-5">
        		<h2>Product / Create</h2>
        	</div>
        	<div class="container p-5 my-5 border">
        		<form action="/admin/product/create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" name="images" class="" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sale</label>
                        <input type="text" name="sale" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Quantiny</label>
                        <input type="text" name="status" class="form-control" required>
                    </div>
        			<div class="form-group">
        				<label>Short Description</label>
        				<textarea type="text" rows="5" name="short_description" class="form-control" required></textarea>
        			</div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" name="description" class="form-control" rows="7" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option>--- Select category ---</option>
                            <?php
                                foreach($args as $category) {
                            ?>
                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                        <?php } ?>
                        </select>
                    </div><br>
        			<div class="form-group text-right">
        				<button name="submit" type="submit" class="btn btn-success">Submit</button>
        				<button name="reset" type="reset" class="btn btn-secondary" onclick="myFunction()">Cancel</button>
        			</div>
        		</form>
        	</div>
        </div>
    </section>

<script type="text/javascript">
    function myFunction() {
         window.location="/admin/product/create";
    }
</script>
