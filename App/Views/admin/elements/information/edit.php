<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
            <div class="row">
                <div class="pt-5 pl-5">
                    <h2>Edit Page Information</h2>
                </div>

                <div class="container p-5 my-5 border">
                    <form action="/admin/page-information/edit" method="post" accept-charset="utf-8">
                        <input type="hidden" name="id" value="<?php echo $args['id']; ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required value="<?php echo $args['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required value="<?php echo $args['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" name="phone" class="form-control" required value="<?php echo $args['phone']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea type="text" name="content" class="form-control" rows="10" required><?php echo $args['content']; ?></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button name="submit" type="submit" class="btn btn-success">Update</button>
                            <button name="reset" type="reset" class="btn btn-secondary" onclick="myFunction()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<script type="text/javascript">
    function myFunction() {
         window.location="/admin/page-information";
    }
</script>