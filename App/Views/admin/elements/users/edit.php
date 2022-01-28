<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="pt-5 pl-5">
            <h2>User / edit</h2>
          </div>
          <div class="container p-5 my-5 border">
            <form action="/admin/user/edit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required value="<?php echo $args['address']; ?>">
              </div>
              <div class="form-group">
                  <label>Role</label>
                  <select name="role" class="form-control">
                    <option>--- Select Role ---</option>
                    <?php if ($args['role']==1) { ?>
                      <option value="1" selected="selected">Admin</option>
                      <option value="0">User</option>
                    <?php } else { ?>
                      <option value="1">Admin</option>
                      <option value="0" selected="selected">User</option>
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
         window.location="/admin/user/edit";
    }
</script>
