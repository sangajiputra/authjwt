<?php include_once dirname(__FILE__).'/header.php';?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Login User</h3>
          <h4 class="page-title">Diperlukan untuk mendapat token yang nantinya di gunakan di setiap request kecuali register. Jika tidak ada token atau token expired maka tidak bisa akses data pada request lain.</h4>
					<h4 class="page-title">Url : <code>http://localhost:8080/auth/login</code>, Method <code>POST menggunakan body x-www-form-urlencoded</code></h4>
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
												<td><code>email</code></td>
												<td>Email user.</td>
                        <td><code>aji@gmail.com</code></td>
											</tr>
                      <tr>
												<td><code>password</code></td>
												<td>Password user.</td>
                        <td><code>12345</code></td>
											</tr>
										</tbody>
									</table>
                  <h4 class="page-title">Jika muncul pesan berhasil berarti anda berhasil login. Silahkan copy <code>token</code> yang di berikan untuk nanti di letakkan di <code>Authorization</code> pada request lain.</h4>
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
