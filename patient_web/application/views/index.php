<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Patient</h4>

                        <!--                        <div class="page-title-right">
                                                    <ol class="breadcrumb m-0">
                                                        <li class="breadcrumb-item">
                                                            <a href="javascript: void(0);">Minible</a>
                                                        </li>
                                                        <li class="breadcrumb-item active">Dashboard</li>
                                                    </ol>
                                                </div>-->

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row" style="display: none;">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <p class="text-muted mb-0">Total Case</p>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup">10</span></h4>

                            </div>
                            <!--<p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>2.65%</span> since last week</p>-->
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <p class="text-muted mb-0">Total Patient</p>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup">3</span></h4>

                            </div>
                            <!--<p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>2.65%</span> since last week</p>-->
                        </div>
                    </div>
                </div> <!-- end col-->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#navpills-home" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">History</span> 
                                    </a>
                                </li>
                                <!--                                <li class="nav-item waves-effect waves-light">
                                                                    <a class="nav-link" data-toggle="tab" href="#navpills-profile" role="tab">
                                                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                                        <span class="d-none d-sm-block"></span> 
                                                                    </a>
                                                                </li>-->
                            </ul>
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="navpills-home" role="tabpanel">
                                    <div style="margin: 10px;">
                                        <h4 class="card-title">History list table</h4>
                                        <p class="card-title-desc">
            <!--                                Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                            to make them scroll horizontally on small devices (under 768px).-->
                                        </p>
                                        <?php
//                                        echo "<pre>";
//                                        print_r($data);
//                                        echo "</pre>";
                                        ?>
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Severity</th>
                                                        <th>Date</th>
                                                        <th>Symptom</th>
                                                        <th style="text-align: center;">Status</th>
                                                        <th style="text-align: center;">Emr</th>
                                                        <th style="text-align: center;">History</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $num = 0;
                                                    foreach ($data as $key => $val) {
                                                        $_where = array('i_hn' => $val->hn);
                                                        $_select = array('i_hn,s_first_name,s_last_name');
//                                                        print_r($_where);
                                                        $user = $this->Main_model->rowdata(TBL_PATIEN, $_where, $_select);

                                                        $date = date_create($val->datetime);
                                                        $datetime = date_format($date, "Y-m-d H:i:s");
                                                        ?>
                                                        <tr>
                                                            <td><?= $num += 1; ?></td>
                                                            <td><?=$user->s_first_name." ".s_last_name;?></td>
                                                            <td><?=$val->level;?></td>
                                                            <td><?=$datetime;?></td>
                                                            <td><?=$val->symptoms;?></td>
                                                            <td  align="center"><i class="fas fa-check"></i></td>
                                                            <td  align="center"><?=$val->emrId;?></td>
                                                            <td align="center">
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="openHistory(<?=$val->hn;?>, <?=$val->emrId;?>);">
                                                                    <i class="fas fa-history"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="navpills-profile" role="tabpanel">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Minible.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="lg_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="body_his">
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div> 