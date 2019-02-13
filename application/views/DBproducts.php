<div style="background-color: #ddd;"> <!-- BG COLOR -->
  <div class="container" style="background-color: #fff;"> <!-- BODY COLOR -->

    <br><br>

    <div class="row"> <!-- SEARCH & BUTTONS -->
      <div class="col-xl-4">  <!-- INPUT & SEARCH BTN -->
        <div class="input-group input-group-lg mb-3"> <!-- INPUT -->
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Name</span>
          </div>
          <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append"> <!-- SEARCH BTN -->
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
          </div> <!-- SEARCH BTN -->
        </div> <!-- INPUT -->
      </div> <!-- INPUT & SEARCH BTN -->
      <div class="col-xl-2 offset-xl-6">
        <button type="button" data-toggle="modal" data-target="#DBProductsAddModal" class="update btn btn-success btn-lg"><i class="fas fa-plus"></i> Add</button>
      </div> <!-- ADD BUTTON -->
    </div> <!-- SEARCH & BUTTONS -->

    <br>

    <!-- MySQL TABLE -->
    <?php 
    include_once 'application/models/MySQL/selectProducts.php';
    ?>
    <!-- MySQL TABLE -->

    <br>

  </div> <!-- BODY COLOR -->
</div> <!-- BG COLOR -->