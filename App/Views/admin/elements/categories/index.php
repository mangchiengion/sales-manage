<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
        	<div class="pt-5 pl-5">
        		<h2>Category / List</h2>
        	</div>
        	<div class="p-5">
        		<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th width="30%">Name</th>
                            <th width="30%">Description</th>
                            <th>Create at</th>
                            <th width="20%">Option</th>   
                        </tr>
                    </thead>
                    <?php 
                        $i=1;
                        foreach($args as $category) {
                    ?>
                    <tr>
                        <td class="align-middle">
                            <?php echo $i;
                            $i++;?>
                        </td>
                        <td class="align-middle">
                            <?php echo $category['name'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $category['description'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $category['create_at'];?>
                        </td>
                        <td>
                            <a href="/admin/category/editing?id=<?php echo $category['id'] ?>" title="" class="btn btn-link">Edit</a>
                            <a href="/admin/category/delete?id=<?php echo $category['id'] ?>" title="" class="btn btn-link">Delete</a>
                        </td>
                    </tr>

                    <?php        
                        }
                    ?>     
                </table>
        	</div>
        </div>
    </section>
