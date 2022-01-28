<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
        	<div class="pt-5 pl-5">
        		<h2>Category / Create</h2>
        	</div>
        	<div class="container p-5 my-5 border">
        		<form action="/admin/category/create" method="post" accept-charset="utf-8">
        			<div class="form-group">
        				<label>Name</label>
        				<input type="text" name="name" class="form-control" required>
        			</div>
        			<div class="form-group">
        				<label>Description</label>
        				<textarea type="text" name="description" class="form-control" required></textarea>
        			</div>
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
         window.location="/admin/category/create";
    }
</script>