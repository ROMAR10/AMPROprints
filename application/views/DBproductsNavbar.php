<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>index.php/DB/index">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>index.php/DB/customers">CUSTOMERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>index.php/DB/employees">EMPLOYEES</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-warning" href="<?php echo base_url();?>index.php/DB/products">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>index.php/DB/suppliers">SUPPLIERS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>