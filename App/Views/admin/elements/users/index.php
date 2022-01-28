<?php include '../App/Views/admin/shared/dashboard.php'; ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="pt-5 pl-5">
            <h2>User / List</h2>
          </div>
          <div class="p-5">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Option</th>   
                        </tr>
                    </thead>
                    <?php 
                        $i=1;
                        foreach($args as $user) {
                    ?>
                    <tr>
                        <td class="align-middle">
                            <?php echo $i;
                            $i++;?>
                        </td>
                        <td class="align-middle">
                            <?php echo $user['name'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $user['email'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $user['phone'];?>
                        </td>
                        <td class="align-middle">
                            <?php echo $user['address'];?>
                        </td>
                        <td class="align-middle">
                            <?php
                                if ($user['role'] == 1) {
                                    echo "Admin";
                                } else { 
                                    echo "User";
                                } 
                            ?>
                        </td>
                        <td>
                            <a href="/admin/user/edit?id=<?php echo $user['id'] ?>" title="" class="btn btn-link">Edit</a>
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
        location.href = "/admin/user/delete?id=<?php echo $user['id'] ?>";
      } else {
        window.location="/admin/user/list";
      }
      document.getElementById("demo").innerHTML = text;
    }
    </script>