<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <span class="mt-0 m-b-30 header-title"><b>Dashboard</b></span>
                <div class="float-right">
                    <div class="d-inline-block">
                        <input class="form-control" type="date" name="" id="">
                    </div>
                    <div class="d-inline-block">
                        <button class="btn btn-light"><i class="fa fa-recycle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-right"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Leads Prospect</h6>
                    <h4 class="mb-4"><?= $prospect ?></h4>
                    <span class="">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-ticket-account float-right"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Form Survey</h6>
                    <h4 class="mb-4"><?= $fs_konsumen ?> </h4>
                    <span class="">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Merchant</h6>
                    <h4 class="mb-4"><?= $partners ?></h4>
                    <span class="">Since last month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-briefcase-check float-right"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Agent</h6>
                    <h4 class="mb-4"><?= $agents ?></h4>
                    <span class="">Since last month</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 m-b-30 header-title">Application Source</h4>
                <div class="table-responsive table-borderless">
                    <table class="table table-vertical">
                        <tbody>
                            <tr>
                                <td>Agent / Business Agent</td>
                                <td>0 Tickets</td>
                            </tr>
                            <tr>
                                <td>Repeat Order</td>
                                <td><?= $repeat_order ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Customer Get Customer</td>
                                <td><?= $cgc ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Employee Get Customer</td>
                                <td><?= $egc ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Head Office - Product</td>
                                <td>0 Tickets</td>
                            </tr>
                            <tr>
                                <td>Merchant Jasa / Barang</td>
                                <td>0 Tickets</td>
                            </tr>
                            <tr>
                                <td>Sharia Head</td>
                                <td>0 Tickets</td>
                            </tr>
                            <tr>
                                <td>Tele Sales</td>
                                <td>0 Tickets</td>
                            </tr>
                            <tr>
                                <td>Tour & Travel</td>
                                <td>0 Tickets</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 m-b-30 header-title">Ticket Status</h4>
                <div class="table-responsive table-borderless">
                    <table class="table table-vertical mb-1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tbody>
                            <tr>
                                <td>Head Approval</td>
                                <td><?= $tiket_head_approval ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Manager Approval</td>
                                <td><?= $tiket_manager_approval ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Pending HO</td>
                                <td><?= $tiket_pending ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Finished</td>
                                <td><?= $tiket_rejected ?> Tickets</td>
                            </tr>
                            <tr>
                                <td>Rejected</td>
                                <td><?= $tiket_finished ?> Tickets</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>