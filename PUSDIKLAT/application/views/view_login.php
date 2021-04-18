<div class = "container-fluid">
  		<div class = "row">
  			<div class="card col-md-4 offset-md-4">
  				<form action="<?= base_url('login/authentication');?>" method="POST">
  					<?php echo $this->session->flashdata('msg');?>
  					<div class="mb-3">
  						<label for="exampleInputEmail1" class="form-label">Username</label>
  						<input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  						<div id="emailHelp" class="form-text">Simply fill your username</div>
  					</div>
  					<div class="mb-3">
  						<label for="exampleInputPassword1" class="form-label">Password</label>
  						<input type="password" name="password" class="form-control" id="exampleInputPassword1">
  					</div>
  					<div class="text-end">
  						<button type="submit" class="btn btn-primary">Login</button>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
