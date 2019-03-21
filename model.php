<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>

  <div class="modal fade"  id="login">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title">Login</h5> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
        </div>
        <div class="modal-body">
          <form id="c_form-h" class="">
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">E-mail</label>
              <div class="col-10">
                <input type="email" class="form-control" id="inputmailh" placeholder="mail@example.com"> </div>
              </div>
              <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                  <input type="password" class="form-control" id="inputpasswordh" placeholder="Password"> </div>
                </div>
                <a href="" class="pull-right" data-toggle="modal" data-dismiss="modal" data-target="#resetpass" >ลืมรหัสผ่าน</a>
              </form>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary">Save changes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
          </div>
        </div>
      </div>

      <div class="modal" id="resetpass">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">ลืมรหัสผ่าน</h5> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
            </div>
            <div class="modal-body">
              <form id="c_form-h" class="">
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">E-mail</label>
                  <div class="col-10">
                    <input type="email" class="form-control" id="inputmailh" placeholder="mail@example.com"> 
                  </div>
                  </div>

                </form>
              </div>
              <div class="modal-footer"> 
                <button type="button" class="btn btn-primary">Resetpassword</button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
              </div>
            </div>
          </div>
        </div>

      </body>

      </html>