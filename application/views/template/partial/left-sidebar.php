<div class="left side-menu">
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
                <?php if ($this->fungsi->module()->branch_active == 1) { ?>

                <li>
                    <a href="<?= base_url('branch') ?>" class="waves-effect">
                        <i class="fas fa-code-branch"></i><span>Branch </span>
                    </a>
                </li>

                <?php } ?>
                <?php if ($this->fungsi->module()->user_active == 1) { ?>
                <li>
                    <a href="<?= base_url('user') ?>" class="waves-effect">
                        <i class="fas fa-users"></i><span>List User</span>
                    </a>
                </li>
                <?php } ?>

                <li>
                    <a href="<?= base_url('notification') ?>" class="waves-effect">
                        <i class="ti-bell noti-icon"></i><span
                            class="badge badge-danger badge-pill float-right"><?= $this->fungsi->notification()->num_rows() > 0 ? $this->fungsi->notification()->num_rows() : '' ?></span><span>
                            Notification
                        </span>
                    </a>
                </li>

                <?php if ($this->fungsi->module()->ticket_active == 1) { ?>
                <li>
                    <a href="<?= base_url('Ticket') ?>" class="waves-effect">
                        <i class="fas fa-ticket-alt"></i> <span> Daftar Tiket </span>
                    </a>
                </li>
                <?php } ?>

                <li class="menu-title">Aktivitas Cabang</li>

                <?php if ($this->fungsi->module()->leads_active == 1) { ?>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Leads
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('leads/leads_database') ?>">Database</a></li>
                        <li><a href="<?= base_url('leads') ?>">Prospect</a></li>
                        <li><a href="<?= base_url('fs_konsumen') ?>">Form Survey</a></li>
                    </ul>
                </li>
                <?php } ?>
                <?php if ($this->fungsi->module()->kerjasama_active == 1) { ?>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="far fa-handshake"></i><span> Kerjasama
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('partner/index_mapping') ?>">Mapping Merchant</a></li>
                        <li><a href="<?= base_url('partner') ?>">Daftar Merchant</a></li>
                        <li><a href="<?= base_url('agent') ?>">Agent / BA</a></li>
                    </ul>
                </li>
                <?php } ?>



                <?php if ($this->fungsi->module()->assignment_active == 1) { ?>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="far fa-clipboard"></i><span> Assignment
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('assignment/leads') ?>">Leads Database</a></li>
                        <li><a href="<?= base_url('assignment/prospect') ?>">Leads Prospect</a></li>
                        <!-- <li><a href="<?= base_url('assignment/nst') ?>">NST</a></li> -->
                    </ul>
                </li>
                <?php } ?>
                <?php if ($this->fungsi->module()->transfer_active == 1) { ?>

                <li>
                    <a href="<?= base_url('transfer_data') ?>" class="waves-effect">
                        <i class="fas fa-sync"></i> <span> Transfer Data </span>
                    </a>
                </li>
                <?php } ?>

                <li class="menu-title">Bantuan HO</li>

                <?php if ($this->fungsi->module()->approval_bonus_active == 1) { ?>
                <li>
                    <a href="<?= base_url('approval_bonus') ?>" class="waves-effect">
                        <i class="fas fa-star"></i> <span> Approval Bonus </span>
                    </a>
                </li>
                <?php } ?>

                <?php if ($this->fungsi->module()->product_active == 1) { ?>
                <li>
                    <a href="<?= base_url('product_support') ?>" class="waves-effect">
                        <i class="ion-headphone  noti-icon"></i><span> Product Support </span>
                    </a>
                </li>
                <?php } ?>

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
</div>
<!-- Sidebar -left -->