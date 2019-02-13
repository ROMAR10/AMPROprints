<!--Sign In Navbar Modal-->
<div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <div class="card">
          <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
            <hr>
            <p class="text-info text-center">Enter username & password</p>
            <form method="post" id="loginForm" name="loginForm" action="<?php echo base_url();?>index.php/DB/index">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="username" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control" placeholder="******" type="password">
                </div>
              </div>

              <input type="submit" class="form-control btn btn-info btn-block" id="btnsignin" name="btnsignin" value="Sign In">
              <p class="text-center"><a href="<?php echo base_url();?>index.php/home/forgotpassword" class="btn">Forgot password?</a></p>

            </form>
          </article>
        </div>

      </div>
    </div>
  </div>
</div> <!--Sign In Navbar Modal-->

<!--DB Customers Add Modal -->
<div class="modal fade" id="DBCustomersAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CUSTOMER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form ACTION="insertintoCustomers.php" METHOD="post">
        <table border="1px">
          <tr>
            <td>AMP</td>
            <td><INPUT type="text" Name="AMP" id="AMP"></td>
          </tr>
          <tr>
            <td>Business Name</td>
            <td><INPUT type="text" Name="bName" id="bName"></td>
          </tr>
          <tr>
            <td>Street Address</td>
            <td><INPUT type="text" Name="Addr" id="Addr"></td>
          </tr>
          <tr>
            <td>City</td>
            <td><INPUT type="text" Name="City" id="City"></td>
          </tr>
        </table>
      </form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
      <button type="button" class="btn btn-success">SAVE</button>
    </div>
  </div>
</div>
</div> <!--DB Customers Add Modal -->

<!--DB Employees Add Modal -->
<div class="modal fade" id="DBEmployeesAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD EMPLOYEE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ADD FORM HERE</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-success">SAVE</button>
      </div>
    </div>
  </div>
</div> <!--DB Employees Add Modal -->

<!--DB Products Add Modal -->
<div class="modal fade" id="DBProductsAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ADD FORM HERE</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-success">SAVE</button>
      </div>
    </div>
  </div>
</div> <!--DB Products Add Modal -->

<!--DB Suppliers Add Modal -->
<div class="modal fade" id="DBSuppliersAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD SUPPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ADD FORM HERE</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-success">SAVE</button>
      </div>
    </div>
  </div>
</div> <!--DB Suppliers Add Modal -->

<!--DB Customers Open Modal -->
<div class="modal fade" id="openCustomers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AMP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php
       while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <th scope="row"><?php echo $row["AMP"];?></th>
          <td><?php echo $row["bName"];?></td>
          <td><?php echo $row["Addr"] . " " . $row["City"] . ", " .$row["State"] . " " . $row["Zip"];?></td>
          <td><?php echo "$" . $row["Total"];?></td>
        </tr>
        <?php
      }
      ?>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
      <button type="button" class="btn btn-success">SAVE</button>
    </div>
  </div>
</div>
</div> <!--DB Customers Open Modal -->