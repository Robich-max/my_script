<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>

			<!-- Topbar Search -->
			<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="position: relative;">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-0 small searchTop" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>

				<div class="list-group dropStyle">
					

				</div>
			</form>


			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- Nav Item - Search Dropdown (Visible Only XS) -->
				<li class="nav-item dropdown no-arrow d-sm-none">
					<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-search fa-fw"></i>
					</a>
					<!-- Dropdown - Messages -->
					<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
						<form class="form-inline mr-auto w-100 navbar-search" style="position: relative;">
							<div class="input-group">
								<input type="text" class="form-control bg-light border-0 small searchTopMobile" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>

							<div class="list-group dropStyle">
								

							</div>



						</form>
					</div>
				</li>

				<!-- Nav Item - Messages -->
				<li class="nav-item dropdown no-arrow mx-1">
					<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-envelope fa-fw"></i>
						<!-- Counter - Messages -->
						<?php $numMsg = $this->m_p->get_num("msg", array("seen" => 0)); if($numMsg > 0) {  ?><span class="badge badge-danger badge-counter"> <?php echo $numMsg; ?> </span> <?php } ?>
					</a>

					<?php

					$msgs = $this->m_p->s_a("msg", array(), 5);

					?>

					<!-- Dropdown - Messages -->
					<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">
							Message Center
						</h6>
						<?php foreach($msgs as $msk) :  ?>
						<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url("admin/show_msg/$msk->id"); ?>" <?php if($msk->seen == 0){ ?> style="background: #eee;" <?php } ?>>
							<div class="dropdown-list-image mr-3">
								<img class="rounded-circle" src="<?php echo get_gravatar($msk->email); ?>" alt="">
								<div class="status-indicator bg-success"></div>
							</div>
							<div class="font-weight-bold">
								<div class="text-truncate"><?php echo short_text($msk->message, 30, 90); ?></div>
								<div class="small text-gray-500"><?php echo date("Y-m-d H:i", $msk->date); ?></div>
							</div>
						</a>

						<?php endforeach; ?>

						<a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url("admin/messages") ?>">Read More Messages</a>
					</div>
				</li>

				<div class="topbar-divider d-none d-sm-block"></div>

				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo get_info("admins", is_login("admin_login"), "username"); ?></span>
						<img class="img-profile rounded-circle" src="<?php echo get_gravatar(get_info("admins", is_login("admin_login"), "email"), 60) ?>">
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

						<a href="<?php echo base_url(); ?>" class="dropdown-item" > <i class="fas fa-undo fa-sm fa-fw mr-2 text-gray-400"></i> Go to website</a>

						<hr>

						<a class="dropdown-item" href="<?php echo base_url("user/logout"); ?>" data-toggle="modal" data-target="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</li>

			</ul>

		</nav>
		<!-- End of Topbar -->