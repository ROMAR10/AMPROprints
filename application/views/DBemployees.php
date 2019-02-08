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
        <button type="button" data-toggle="modal" data-target="#DBEmployeesAddModal" class="update btn btn-success btn-lg"><i class="fas fa-plus"></i> Add</button>
      </div> <!-- ADD BUTTON -->
    </div> <!-- SEARCH & BUTTONS -->

    <br>

    <table class="table table-striped table-hover table-sm" style="margin: 0px; border: 1px solid #ddd;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date In</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Juan</td>
          <td>Perez</td>
          <td>01/05/17</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Luis</td>
          <td>Sanchez</td>
          <td>02/15/17</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Maria</td>
          <td>Lopez</td>
          <td>02/25/17</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
            <button type="button" data-toggle="modal" data-target="#edit" data-uid="2" class="update btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>

    <br>

  </div> <!-- BODY COLOR -->
</div> <!-- BG COLOR -->


<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CUSTOMER</h5>
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
</div>