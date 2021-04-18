<div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-5">
			<h3><strong>Daftar Mahasiswa Magang</strong></h3>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) :?>
				<li class="list-group-item"><?= $mhs ['nama'];?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>