<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
            <?php 
                foreach($args as $contact) {
            ?>
        	<div class="pt-5 pl-5">
        		<h2>About Page Information <a href="/admin/page-information/edit?id=<?php echo $contact['id'] ?>" title="" class="btn btn-link">Edit</a></h2>
        	</div>

    	    <div class="p-5 bg-white m-5">
                <h4>Contact</h4><br>
                <p><b>Name: </b><?php echo $contact['name'];?></p>
                <p><b>Email: </b><?php echo $contact['email'];?></p>
                <p><b>Telephone: </b><?php echo $contact['phone'];?></p>
            </div>
            <div class="p-5 bg-white m-5">
                <h4>Others</h4><br>
                <p><b>Content: </b><?php echo $contact['content'];?></p>
            </div>
            <?php        
                }
            ?>
        </div>
    </section>
