<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url('assets/images/') ?>profile.png" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?php echo  $this->session->userdata("nama") ?>
							<span class="user-level"><?php echo  $this->session->userdata("level") ?></span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="<?= base_url('Admin/pageProfile'); ?>">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('Admin/pagePassword'); ?>">
									<span class="link-collapse">Edit Password</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="<?= base_url('Admin') ?>" class="collapsed" aria-expanded="false">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Management</h4>
				</li>
				<?php if ($this->session->userdata('level') == "Super Admin") { ?>
					<li class="nav-item">
						<a href="<?= base_url('Admin/pageAdmin') ?>">
							<i class="fas fa-users"></i>
							<p>Admin</p>
						</a>
					</li>
				<?php } else {
				} ?>
				<li class="nav-item">
					<a href="<?= base_url('Admin/pageCollect') ?>">
						<i class="fas fa-box"></i>
						<p>Collection</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/pageInfo') ?>">
						<i class="far fa-newspaper"></i>
						<p>Information</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Notifications</h4>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/pageComment') ?>">
						<i class="fas fa-comment"></i>
						<p>Comment</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/pageSubscriber') ?>">
						<i class="fas fa-user-alt"></i>
						<p>Subscribers</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Admin/pageMessage') ?>">
						<i class="fas fa-envelope"></i>
						<p>Message</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->