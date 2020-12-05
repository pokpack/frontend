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
                        <h4 class="mb-0">Nurse</h4>

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
                                <p class="text-muted mb-0">Total Admit Case</p>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?=count($data);?></span></h4>

                            </div>
                            <!--<p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>2.65%</span> since last week</p>-->
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <p class="text-muted mb-0">Total Treat Case</p>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup" id="count_treat_case"><?=count($treat);?></span></h4>

                            </div>
                            <!--<p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>2.65%</span> since last week</p>-->
                        </div>
                    </div>
                </div> <!-- end col-->
                
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <p class="text-muted mb-0">Total History Case</p>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup" id="count_his_case"><?=count($his);?></span></h4>

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
                            <div style="margin-bottom: 20px;" align="center">
                                <?php
                                $ob = json_decode($data);
//                                print_r($ob);
                                ?>
                                <a>
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#lg_modal" style="width: 200px;">
                                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Admit
                                    </button>
                                </a>    
                            </div>
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#navpills-home" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Admit</span> 
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#navpills-profile" role="tab"  onclick="tabTreat();">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Treat</span> 
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#navpills-messages" role="tab" onclick="tabHistory();">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">History</span>   
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="navpills-home" role="tabpanel">
<!--                                    <div style="margin: 10px;">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item="" class="row">
                                                <div class="form-group col-lg-2">
                                                    <label for="emrId">EMR Id</label>
                                                    <input type="number" id="emr" name="emrId" class="form-control" onkeyup="searchEmr(this.value, 'admit');">
                                                </div>

                                                <div class="form-group col-lg-2">
                                                    <label for="hn">HN</label>
                                                    <input type="number" id="hn" class="form-control"  onkeyup="searchHn(this.value, 'admit');">
                                                </div>

                                                <div class="form-group col-lg-2">
                                                    <label for="subject">Severity</label>
                                                    <input type="text" id="severity" name="severity" class="form-control" onkeyup="searchSeverity(this.value, 'admit');">
                                                </div>
                                            </div>

                                        </div>
                                    </div>-->

                                    <div style="margin: 10px;">
                                        <h4 class="card-title">Admit list table</h4>
                                        <p class="card-title-desc">
            <!--                                Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                            to make them scroll horizontally on small devices (under 768px).-->
                                        </p>

                                        <div class="table-responsive">
                                            <table id="tb_admit" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>HN Id</th>
                                                        <th>Name</th>
                                                        <th>Severity</th>
                                                        <th>Date</th>
                                                        <th>Symptom</th>
                                                        <th style="text-align: center;">Status</th>
                                                        <th style="text-align: center;">EMR Id</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $num1 = 0;
                                                    foreach ($ob as $key => $val) {

                                                        $_where = array('i_hn' => $val->hn);
                                                        $_select = array('i_hn,s_first_name,s_last_name');
//                                                        print_r($_where);
                                                        $user = $this->Main_model->rowdata(TBL_PATIEN, $_where, $_select);

                                                        $date = date_create($val->datetime);
                                                        $datetime = date_format($date, "Y-m-d H:i:s");
                                                        ?>
                                                        <tr id="tr_admit_<?= $val->id; ?>" class="tr-admit">
                                                    <input type="hidden" value="<?= $val->id; ?>" />
                                                    <td><?= $num1 += 1; ?></td>
                                                    <td style="text-align: center;"><span data-id="<?= $val->id; ?>" class="text-admit-hn"><?= $user->i_hn; ?></span></td>
                                                    <td><?= $user->s_first_name . " " . $user->s_last_name; ?></td>
                                                    <td style="text-align: center;"><span data-id="<?= $val->id; ?>" class="text-admit-sev"><?= $val->level; ?></span></td>
                                                    <td><?= $datetime; ?></td>
                                                    <td><?= $val->symptoms; ?></td>
                                                    <td style="text-align: center;"><i class="fas fa-check"></i></td>
                                                    <td style="text-align: center;"><span data-id="<?= $val->id; ?>" class="text-admit-emr"><?= $val->emrId; ?></span></td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="navpills-profile" role="tabpanel">
                                    <div class="tab-pane active" role="tabpanel" id="body_tab_treat">
                                        xx
                                    </div>
                                </div>

                                <div class="tab-pane" id="navpills-messages" role="tabpanel" >
                                    <div class="tab-pane active" role="tabpanel" id="body_tab_his">
                                        ...
                                    </div>
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
                <h5 class="modal-title mt-0" id="myLargeModalLabel">New Admit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_admit" method="post">
                    <!--<input type="hidden" value="<?= $this->session->userdata('user_id'); ?>" name="nurse_record" />-->
                    <input type="hidden" value="<?= $_COOKIE[user_id]; ?>" name="nurse_record" />
                    <div class="" style="padding: 15px; ">
                        <div class="form-group row">
                            <label for="example-datetime-local-input" 
                                   class="col-md-2 col-form-label">Patient</label>
                            <div class="col-md-10">
                                <select class="form-control select2" style="width: 100%;" name="hn" onchange="select_patient(this);">
                                    <option>Select Patient</option>
                                    <?php
                                    $_where = array('i_status' => 1);
                                    $_select = array('id, s_first_name, s_last_name, s_idcard, i_hn');
                                    $patien = $this->Main_model->fetch_data('', '', TBL_PATIEN, $_where, $_select);
                                    foreach ($patien as $key => $val) {
                                        ?>
                                        <option value="<?= $val->i_hn; ?>"><?= $val->s_first_name . " " . $val->s_last_name . " : " . $val->s_idcard; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div id="load_patient_data" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div class="" style="padding: 15px;">
                        <div class="form-group row">
                            <label for="d_date" class="col-md-2 col-form-label">Date and time</label>
                            <div class="col-md-10">
                                <!--<input class="form-control" type="datetime-local" value="<?= date(); ?>" name="date" id="d_date">-->
                                <input class="form-control" type="datetime-local" value="<?= date('Y-m-d') . "T" . date("H:i:s"); ?>" id="example-datetime-local-input" name="datetime">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Level Severity</label>
                            <div class="col-md-10"> 
                                <input class="form-control" type="number" value="" name="level" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">How to get hospital</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="h_t_hospital">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Come by</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="come_by">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">LMP</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="<?= date('Y-m-d'); ?>" name="lmp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Symptoms</label>
                            <div class="col-md-10">
                                <!--<input class="form-control" type="text" value="" name="symptoms">-->
                                <textarea name="symptoms" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Current symptoms / first symptoms / trauma</label>
                            <div class="col-md-10">
                                <!--<input class="form-control" type="text" value="" name="all_symptoms">-->
                                <textarea name="all_symptoms" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div style="background-color: #2196F3;
                             width: 100%;
                             height: 2px;
                             margin-top: 10px;
                             margin-bottom: 30px;box-shadow: 1px 1px 2px;"></div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Glasgow coma scale (GCS)</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="gcs">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">E (Eye opening)</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="e">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="form-group row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">E (Eye opening)</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="number" value="" name="e">
                                                    </div>
                                                </div>-->
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">V (Verbal response)</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="v">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">M (Motor response)</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="m">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">BT</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="bt">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">BP</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="bp">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">PR</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="pr">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="margin-bottom: 0px;">
                                    <label for="example-text-input" class="col-md-4 col-form-label">O2sat</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" name="o2sat">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Pain Score (PS)</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value=""name="ps">
                            </div>
                        </div>
                    </div>
                    <div style="padding: 15px;">
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1">Submit data</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>   

<div class="modal fade bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="lg_modal_2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">New Admit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="body_treat">
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="lg_modal_3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">History EMR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="body_his">
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>