<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Services</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Add Services</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-blue">
						<div class="card-header">
							<?php
							$message=$this->session->userdata('message');
							if ($message){
								echo "<h3 class='card-title'>$message</h3>";
								$this->session->unset_userdata('message');
							}
							else
							{
								echo "<h3 class='card-title'>Service Information</h3>";
							}
							?>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="<?php echo base_url()?>add_service" method="post">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Service Name</label>
									<input type="text" class="form-control" id="" placeholder="" name="service_name" required>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<!-- /.card -->

				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">
					<!-- Form Element sizes -->
					<div class="card card-green">
						<div class="card-header">
							<h3 class="card-title">Service Name</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
								<tr>
									<th style="width: 10px">#</th>
									<th>Services</th>
									<th style="width: 40px">Action</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($service_info as $row){?>
								<tr>
									<td><?php echo $row->service_id;?></td>
									<td><?php echo $row->service_name;?></td>
									<td><a href="<?php echo base_url()?>edit_service/<?php echo $row->service_id;?>"
										   class=""><i class="far fa-edit"></i></a>
										<a href="<?php echo base_url()?><?php echo $row->service_id;?>"
										   class=""><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						<div class="card-footer clearfix">
							<ul class="pagination pagination-sm m-0 float-right">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
