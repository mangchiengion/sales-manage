<?php
	include '../App/Views/admin/shared/dashboard.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div style="padding-top: 20px">
          <h2> Search / <?php echo $_GET['search']; ?></h2>
        </div>
        <div class="col-md-2">
          
        </div>
        <?php foreach ($args as $product) { ?>
        	<div class="">
        		<h3>
        			<?php echo $product['name']; ?>
        		</h3>
        	</div>
        	<div class="">
        		<h3>
        			<?php echo $product['prices']; ?>
        		</h3>
        	</div>
        	<div class="">
        		<img src="/<?php echo $product['images'] ?>" alt="">
        	</div>
        <?php } ?>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <script type="text/javascript">
    function myFunction() {
         window.location="/admin/product/create";
    }
</script>
    <!-- /.content -->
  </div>

  <?php include '../App/Views/admin/shared/footer.php'; ?>