<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(<?= base_url('/assets/login_programmer/images/bg-01.jpg'); ?>">
				<span class="login100-form-title-1">
					Hello Programmer
				</span>
			</div>

			<form class="login100-form validate-form" method="post" action="<?= base_url('/programmer/auth/'); ?>">
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username tidak boleh kosong">
					<span class="label-input100">Username</span>
					<input class="input100" type="text" name="username" placeholder="Masukkan Username Anda">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password tidak boleh kosong">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" placeholder="Masukkan Password Anda">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>
			</form>
			<center>
				<strong>Quest Client</strong>
				<div class="image-quest100">
					<img class="img-client" src="<?= base_url('assets/programmer/quest.png'); ?>">
					<div class="image-text">
						<table class="table">
							<thead class="thead-dark">
								<tr>
								<th scope="col">No. </th>
								<th scope="col">Nama Client</th>
								<th scope="col">Nama Projek</th>
								<th scope="col">Deadline</th>
								<th scope="col">Price</th>
								<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$this->db->join('client', 'client.id = project.id_client'); 
									$projek = $this->db->get('project')->result();
									$no = 1;
									foreach ($projek as $v_projek){
								?>
								<tr>
									<th scope="row"><?= $no++ ?></th>
									<th scope="row"><?= $v_projek->name_client ?></th>
									<th scope="row"><?= $v_projek->name_project ?></th>
									<th scope="row"><?= date('d-m-Y', strtotime($v_projek->deadline)) ?></th>
									<th scope="row">Rp. <?= number_format($v_projek->price, 0, ',', '.') ?></th>
									<th scope="row"><?php
										if($v_projek->status == 1){
											echo "<span class='label label-info'>On Progress</span>";
										}else{
											echo "Completed";
										}
									?></th>
								</tr>
								<?php
									}
								?>
						</table>
					</div>
				</div>
			</center>
		</div>
	</div>
</div>