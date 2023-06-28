<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<style>
  textarea{
    resize: none;
  }
</style>
<div class="col-lg-12">
  <div class="card card-outline card-primary">
    <div class="card-body">
      <form action="signup.php" id="manage-customer" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="">
        <div class="row">
          <div class="col-md-12">
            <div id="msg" class=""></div>

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">First Name</label>
                <input type="text" name="firstname" id="" class="form-control form-control-sm" value="" required>
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Last Name</label>
                <input type="text" name="lastname" id="" class="form-control form-control-sm" value="" required>
              </div>
            </div>

   

            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Email</label>
                <input type="email" name="email" id="" class="form-control form-control-sm" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Password</label>
                <input type="password" name="password" id="" class="form-control form-control-sm">
                
              </div>
            </div>

            
          </div>
        </div>
         <div class="card-footer border-top border-info">
      <div class="d-flex w-100 justify-content-center align-items-center">
        <button class="btn btn-flat  bg-gradient-primary mx-2" type="submit">Save</button>
        <a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=customer_list">Cancel</a>
      </div>
    </div>

      </form>
    </div>
     </div>
</div>
