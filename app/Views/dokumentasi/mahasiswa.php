<?php include_once dirname(__FILE__).'/header.php';?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Mahasiswa</h3>
          <h4 class="page-title">Mahasiswa ada fitur Create, Read, Update, Delete. Jangan lupa pada <code>Authorization</code> pilih Bearer Token untuk Type nya lalu pada bagian token paste token yang di berikan pada saat login (berlaku untuk semua request mahasiswa).</h4>
					<h4 class="page-title">Url get all : <code>http://localhost:8080/mahasiswa/getData</code>, Method <code>GET</code></h4>
					<br>
					<h4 class="page-title">Url get all with page : <code>http://localhost:8080/mahasiswa/getData?limit={berapa limit perhalaman}&page={halaman berapa}</code>, Method <code>GET</code></h4>
					<br>
					<h4 class="page-title">Url get one : <code>http://localhost:8080/mahasiswa/detail/{id_mahasiswa}</code>, Method <code>GET</code></h4>
					<br>
					<h4 class="page-title">Url delete : <code>http://localhost:8080/mahasiswa/delete/{id_mahasiswa}</code>, Method <code>GET</code></h4>
					<br>
					<h4 class="page-title">Url add : <code>http://localhost:8080/mahasiswa/add</code>, Method <code>POST</code></h4>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Request</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Description</th>
                        <th>Example</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>nama_mahasiswa</code></td>
												<td>Di isi dengan nama mahasiswa</td>
                        <td><code>Aji</code></td>
											</tr>
											<tr>
												<td><code>jurusan_mahasiswa</code></td>
												<td>Di isi dengan jurusan mahasiswa.</td>
                        <td><code>MIF</code></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div><br>
					<h4 class="page-title">Url edit : <code>http://localhost:8080/mahasiswa/edit</code>, Method <code>POST</code></h4>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Request</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Description</th>
                        <th>Example</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>nama_mahasiswa</code></td>
												<td>Di isi dengan nama mahasiswa</td>
                        <td><code>Aji Ganteng</code></td>
											</tr>
											<tr>
												<td><code>jurusan_mahasiswa</code></td>
												<td>Di isi dengan jurusan mahasiswa.</td>
                        <td><code>MIF2</code></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<?php include_once dirname(__FILE__).'/footer.php';?>
