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
                        <h4 class="mb-0">Pharmacist</h4>

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

            <div class="row">
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
                                        <span class="d-none d-sm-block">Dispense drug</span> 
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
                                        <h4 class="card-title">Dispense list table</h4>
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
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>HN</th>
                                                        <th>Name</th>
                                                        <th>Severity</th>
                                                        <th>Date</th>
                                                        <th>Symptom</th>
                                                        <th style="text-align: center;">Status</th>
                                                        <th style="text-align: center;">Dispense</th>
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
                                                            <td align="center"><?= $val->hn; ?></td>
                                                            <td><?=$user->s_first_name." ".s_last_name;?></td>
                                                            <td><?=$val->level;?></td>
                                                            <td><?=$datetime;?></td>
                                                            <td><?=$val->symptoms;?></td>
                                                            <td  align="center"><i class="fas fa-check"></i></td>
                                                            <td align="center">
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="openModalPhc(<?=$val->hn;?>, <?=$val->emrId;?>);">
                                                                    <i class="fas fa-ring"></i>
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
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Examtnation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="body_emr">
                <form id="form_admit" method="post">
                    <div class="card border border-primary">
                        <div class="card-header bg-transparent border-primary">
                            <h5 class="my-0 text-primary"><i class="uil uil-user mr-3"></i>Patient Info</h5>
                        </div>
                        <div class="card-body">
                            <!--<h5 class="card-title mt-0">card title</h5>-->
                            <table class="table table-bordered table-nowrap mb-0">

                                <tr>
                                    <th class="text-nowrap" scope="row" width="200">HN Id</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row" width="200">Name</th>
                                    <td>Testname 01</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Weight</th>
                                    <td><code>63</code></td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Height</th>
                                    <td colspan="5">175</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Birthday</th>
                                    <td colspan="5">01/10/1993</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Blood type</th>
                                    <td colspan="5">O</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Drug allergy</th>
                                    <td colspan="5">-</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Congenital disease</th>
                                    <td colspan="5">-</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="card border border-danger">
                        <div class="card-header bg-transparent border-danger">
                            <h5 class="my-0 text-danger"><i class="uil uil-user mr-3"></i>Medical Record</h5>
                        </div>
                        <div class="card-body">
                            <!--<h5 class="card-title mt-0">card title</h5>-->
                            <div class="table-responsive">
                                <table class="table table-bordered table-nowrap mb-0">
                                    <tr>
                                        <th class="text-nowrap" scope="row" width="200">Date and time</th>
                                        <td>2020-11-25 17:00:00</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row" width="200">Level Severity</th>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">How to get hospital</th>
                                        <td>Ambulance</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Come by</th>
                                        <td>Car</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">LMP</th>
                                        <td colspan="5">5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Symptoms</th>
                                        <td colspan="5">Have a high fever</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Current symptoms <br/>/ first symptoms <br/>/ trauma</th>
                                        <td colspan="5">Have a high fever</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Glasgow coma scale (GCS)</th>
                                        <td colspan="5">5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">E (Eye opening)</th>
                                        <td colspan="5">4</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">V (Verbal response)</th>
                                        <td colspan="5">3</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">M (Motor response)</th>
                                        <td colspan="5">4</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">BT</th>
                                        <td colspan="5">5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">BP</th>
                                        <td colspan="5">4</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">PR</th>
                                        <td colspan="5">5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">O2sat</th>
                                        <td colspan="5">3</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Pain Score (PS)</th>
                                        <td colspan="5">5</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Nurse record</th>
                                        <td colspan="5">Nurse 01</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-info">
                        <div class="card-header bg-transparent border-info">
                            <h5 class="my-0 text-danger"><i class="uil uil-user mr-3"></i>Examination Record</h5>
                        </div>
                        <div class="card-body">
                            <!--<h5 class="card-title mt-0">card title</h5>-->
                            <div class="table-responsive">
                                <table class="table table-bordered table-nowrap mb-0">
                                    <tr>
                                        <th class="text-nowrap" scope="row" width="200">Treatment</th>
                                        <td>Test</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="" style="padding: 15px; padding-bottom: 0px;">
                        <!--                        <div class="form-group row">
                                                    <label for="" class="col-md-2 col-form-label">Treatment</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="datetime-local" value="<?= date(); ?>" name="date" id="d_date">
                                                        <input class="form-control" type="text" value="" >
                                                        <textarea id="formmessage" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>-->
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Drug&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="appendDrug();">
                                    <i class="fas fa-plus-circle"></i></button></label>

                            <div class="col-md-10" id="box_drug">
                                <div class="row row_drug" style="margin-bottom: 15px;">
                                    <div class="col-md-8">
                                        <select class="form-control">
                                            <option></option>
                                            <option>Paracetamol</option>
                                            <option>Aspirin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" value="" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="padding: 15px;">
                        <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1">Submit data</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div> 