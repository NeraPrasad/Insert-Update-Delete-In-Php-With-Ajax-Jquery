<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/fonts.css" />

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/myjs.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title></title>
  </head>
  <body class="">

    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <div class="cart-title ml-5 my-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">
              Add New User
            </button>
          </div>

          <div class="card-body">

            <div id="table">

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"  class="text-dark" >Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

                <p id="message" class="text-dark"></p>

          <form>
            <input type="text" class="form-control my-2" placeholder="User Name" id="username"/>
            <input type="email" class="form-control my-2" placeholder="Email" id="email"/>
          </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_register">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_close">Close</button>

          </div>
        </div>
      </div>
    </div>


    <!--Edit Model-->
    <!-- Modal -->
    <div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"  class="text-dark" >Update User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

                <p id="up-message" class="text-dark"></p>

          <form>
            <input type="text" class="form-control my-2" placeholder="User Name" id="Up_username"/>
            <input type="email" class="form-control my-2" placeholder="Email" id="Up_email"/>
            <input type="hidden" class="form-control my-2" placeholder="Email" id="Up_User_ID"/>
          </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_update">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_close">Close</button>

          </div>
        </div>
      </div>
    </div>


    <!--Delete Model-->
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"  class="text-dark" >Delete User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p> Do You Want to Delete the Record ?.</p>
            <p id="delete-message" class="text-dark"></p>
          <form>
             <button type="button" class="btn btn-primary" id="btn_delete_record">Delete Now</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_close">Close</button>
          </form>

          </div>

        </div>
      </div>
    </div>




  </body>
</html>
