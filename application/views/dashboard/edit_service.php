<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Update Services</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Update Services</li>
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
						<form action="<?php echo base_url()?>update_service" method="post">
							<div class="card-body">
									<input type="hidden" class="form-control" id="" placeholder="" name="service_id" value="<?php echo $service_info_by_id->service_id;?>" required>
								<div class="form-group">
									<label for="exampleInputEmail1">Service Name</label>
									<input type="text" class="form-control" id="" placeholder="" name="service_name" value="<?php echo $service_info_by_id->service_name;?>" required>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
					<!-- /.card -->

				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">
					<!-- Form Element sizes -->
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
