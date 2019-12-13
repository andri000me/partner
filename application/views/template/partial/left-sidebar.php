<div class="slimscroll-menu" id="remove-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">Informasi</li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('profile') ?>" class="waves-effect">
                    <i class="mdi ion-person"></i><span> Profile </span>
                </a>
            </li>

            <?php if ($this->fungsi->user_login()->level >= 4) { ?>
                <li>
                    <a href="<?= base_url('branch') ?>" class="waves-effect">
                        <i class="mdi ion-person"></i><span>Branch </span>
                    </a>
                </li>
            <?php } ?>

            <li>
                <a href="<?= base_url('notification') ?>" class="waves-effect">
                    <i class="ti-bell noti-icon"></i><?= $this->fungsi->notification()->num_rows() > 0 ? '<span class="badge badge-primary badge-pill float-right">' . $this->fungsi->notification()->num_rows() .  '</span>' : ''  ?> <span>Notification</span>
                </a>
            </li>

            <li class="menu-title">Aktivitas Cabang</li>
            <?php if ($this->fungsi->user_login()->level != 4) { ?>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Leads <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('mapping_leads') ?>">Database</a></li>
                        <li><a href="<?= base_url('leads') ?>">Prospect</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi ion-person-stalker "></i><span> Kerjasama <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Mapping_partner') ?>">Mapping Lokasi Partner</a></li>
                        <li><a href="<?= base_url('Partner') ?>">Partnership</a></li>
                        <li><a href="<?= base_url('Agent') ?>">Agent / BA</a></li>
                    </ul>
                </li>
            <?php } ?>

            <li>
                <a href="<?= base_url('Ticket') ?>" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i> <span> Tiket </span>
                </a>
            </li>

            <li class="menu-title">Bantuan HO</li>

            <li>
                <a href="<?= base_url('') ?>" class="waves-effect">
                    <i class="ion-headphone  noti-icon"></i><span> Product Support </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('nst') ?>" class="waves-effect">
                    <i class="ion-ios7-paper-outline noti-icon"></i><span> NST </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->