<!-- LOGO -->
<div class="topbar-left">
    <a href="index.html" class="logo">
        <span>
            <img src="<?= base_url('template/assets/images/logo-light.png') ?>" alt="" height="18">
        </span>
        <i>
            <img src="<?= base_url('template/assets/images/logo-sm.png') ?>" alt="" height="22">
        </i>
    </a>
</div>

<nav class="navbar-custom">
    <ul class="navbar-right d-flex list-inline float-right mb-0">
        <li class="dropdown notification-list">
            <div class="dropdown pt-3 d-inline-block">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Create
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="ti-bell noti-icon"></i>
                <?= $this->fungsi->notification()->num_rows() > 0 ? '<span class="badge badge-pill badge-danger noti-icon-badge">' . $this->fungsi->notification()->num_rows() . '</span>' : '' ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <!-- item-->
                <h6 class="dropdown-item-text">
                    Notifications (<?= $this->fungsi->notification()->num_rows() ?>)
                </h6>
                <div class="slimscroll notification-item-list">
                    <?php if ($this->fungsi->notification()->num_rows() > 0) { ?>
                        <?php foreach ($this->fungsi->notification()->result() as $notifikasi) { ?>
                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">Notifikasi Baru<span class="text-muted"><?= $notifikasi->type ?><br>ID Tiket #<?= $notifikasi->id_ticket ?></span></p>
                            </a>
                        <?php }
                        } else { ?>
                        <center><span class="text-muted ml-4">Tidak ada notfikasi!</span></center>
                    <?php } ?>
                </div>

                <!-- All-->
                <a href="<?= base_url('notification') ?>" class="dropdown-item text-center text-primary">
                    View all <i class="fi-arrow-right"></i>
                </a>
            </div>
        </li>
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?= $this->fungsi->user_login()->foto != '' ? base_url('uploads/foto_profil/' .  $this->fungsi->user_login()->foto) : base_url('assets/img/profile-pic.jpg')  ?>" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a class="dropdown-item" href="<?= base_url('Profile') ?>"><i class="mdi mdi-account-circle m-r-5"></i>
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?= base_url('Auth/logout') ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
                </div>
            </div>
        </li>
    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
    </ul>

</nav>