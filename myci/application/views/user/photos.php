<div class="container" style="min-height: 650px">
	<div class="row">
		<h2 class="text-center">Your Photos</h2>

		<div class="col-md-10 offset-md-1">
			<form method="post" action="<?= site_url('photos/upload_photo') ?>" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					Upload Your Photos
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Title</label>
						<input name="title" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Select Photo</label>
						<input name="userfile" type="file" class="form-control">
					</div>
					<div class="text-danger text-center">
						<?= $this->session->flashdata("msg"); ?>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Upload" class="btn btn-primary">
				</div>
			</div>
			</form>	
		</div>
	</div>
	<div class="row mt-3">
		<?php
		foreach($result->result_array() as $data)
		{
		?>
		<div class="col-md-2 mb-3">
			<div class="card">
			  <img class="card-img-top" src="<?= base_url('assets/photos/'.$data['image_name']) ?>" style="height: 200px;">
			  <div class="card-body">
			    <small class="card-text m-0 p-0"><?= $data['title'];?></small>
			    <a href="<?= site_url('photos/delete/'.$data['id'].'/'.$data['image_name']) ?>" class="btn btn-danger btn-sm float-right">
			    	<i class="fa fa-times" aria-hidden="true"></i>
			    </a>
			  </div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>