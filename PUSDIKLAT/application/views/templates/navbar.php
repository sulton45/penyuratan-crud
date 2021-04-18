<div class="container-fluid">
  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<div class="container-fluid">
  				<a class="navbar-brand"><img src="<?= base_url("assets/logo1.png");?>" width="35"></a>
  				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  					<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
  					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  						<li class="nav-item">
  							<a class="nav-link active" aria-current="page" href="http://localhost/PUSDIKLAT/">Home</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">DIKLAT</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Berita</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Tim Kepemimpinan</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Direktori Pegawai</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Analisis Kebutuhan DIKLAT</a>
  						</li>
  						<li class="nav-item dropdown">
  							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Program</a>
  							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  								<li><a class="dropdown-item" href="<?= base_url("home/unit");?>">Magang</a></li>
  								<li><hr class="dropdown-divider"></li>
  								<li><a class="dropdown-item" href="<?= base_url("home/penelitian");?>">Penelitian</a></li>
  							</ul>
  						</li>
  					</ul>
  					<form class="d-flex">
                <?php if ($this->session->userdata('role') == 'root') : ?>
                  <a class="btn btn-outline-dark" href="<?= base_url('login/logout'); ?>">Logout</a>
                <?php elseif ($this->session->userdata('role') == 'admin') : ?>
                  <a class="btn btn-outline-dark" href="<?= base_url('login/logout'); ?>">Logout</a>
                <?php else : ?>
                  <a class="btn btn-outline-dark" href="<?= base_url('login'); ?>">Are You Admin?</a>
                <?php endif; ?>
  						<!-- <a class="navbar-text" href="http://localhost/PUSDIKLAT/login">Are You Admin?</a> -->
  					</form>
  				</div>
  			</div>
  		</nav>
  	</div>