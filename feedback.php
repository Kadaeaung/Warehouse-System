<?php if(!isset($conn)){ include 'db_connect.php'; } ?>
<style>
  textarea{
    resize: none;
  }
</style>

<?php include 'header.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" id="manage-feedback">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

        <div class="row">
          <div class="col-md-12">
            <div id="msg" class=""></div>

            <div>
              	
              	<input type="hidden" name="customer_id" value="<?php echo isset ($_SESSION['login_id']) ?>">
              </div>
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Rating</label>
                <input type="text" name="rating" id="" class="form-control form-control-sm" value="<?php echo isset($rating) ? $rating : '' ?>" required>
              </div>
            
              <div class="col-sm-6 form-group ">
                <label for="" class="control-label">Comment</label>
                <input type="text" name="comment" id="" class="form-control form-control-sm" value="<?php echo isset($comment) ? $lastname : '' ?>" required>
              </div>
            
              
      	      
            
          </div>
        </div>
      </form>
  	</div>
  	<div class="card-footer border-top border-info">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-feedback">Send</button>
  			<a class="btn btn-flat bg-gradient-secondary mx-2" href="./c_index.php?page=c_home">Cancel</a>
  		</div>
  	</div>
	</div>
</div>
<script>
	$(document).ready(function(){
    $('#manage-feedback').submit(function(e){
    e.preventDefault()
    start_load()
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'ajax.php?action=feedback',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
        end_load();

      },
      success:function(resp){
        if(resp == 1){
          location.href ='c_index.php?page=c_home';
        }
      }
    })
  })
  })
  function displayImgCover(input,_this) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#cover').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>
<?php include 'header.php' ?>