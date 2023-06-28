<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary " href="./index.php?page=new_staff"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Staff</th>
						<th>Email</th>
						<th>Branch</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT u.*,concat(u.firstname,' ',u.lastname) as name FROM customer order by concat(u.firstname,' ',u.lastname) asc ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo ($row['email']) ?></b></td>
						<td><b><?php echo ucwords($row['address']) ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="index.php?page=edit_staff&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-flat ">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-flat delete_staff" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
		$('.view_customer').click(function(){
			uni_modal("staff's Details","view_customer.php?id="+$(this).attr('data-id'),"large")
		})
	$('.delete_customer').click(function(){
	_conf("Are you sure to delete this staff?","delete_customer",[$(this).attr('data-id')])
	})
	})
	function delete_staff($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_customer',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>