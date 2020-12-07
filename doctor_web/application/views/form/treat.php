<?php
$_where = array('i_hn' => $_POST[hn]);
$_select = array('*');
//                                                        
$user = $this->Main_model->rowdata(TBL_PATIEN, $_where, $_select);
//$data_emr = json_decode($data);
//echo "<pre>";
//print_r($data);
//echo "</pre>";
//$date = date_create($data->datetime);
$datetime = date_format($date, "Y-m-d H:i:s");

$_where = array('id' => $data->nurse_record);
$_select = array('s_first_name,s_last_name');
//                                                        
$nurse_recorder = $this->Main_model->rowdata(TBL_USER, $_where, $_select);

$_where = array('id' => $data->doctor_record);
$_select = array('s_first_name,s_last_name');
//                                                        
$doctor_recorder = $this->Main_model->rowdata(TBL_USER, $_where, $_select);

$_where = array('id' => $data->pharmacist_record);
$_select = array('s_first_name,s_last_name');
//                                                        
$pharmacist_record = $this->Main_model->rowdata(TBL_USER, $_where, $_select);
//exit();
?>

<div class="card border border-primary">
    <div class="card-header bg-transparent border-primary">
        <h5 class="my-0 text-primary"><i class="uil uil-user mr-3"></i>Patient Info</h5>
    </div>
    <div class="card-body">
        <!--<h5 class="card-title mt-0">card title</h5>-->
        <table class="table table-bordered table-nowrap mb-0">

            <tr>
                <th class="text-nowrap" scope="row" width="200">HN Id</th>
                <td><?= $user->i_hn; ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row" width="200">Name</th>
                <td><?= $this->Main_model->text_decode($user->s_first_name) . " " . $this->Main_model->text_decode($user->s_last_name); ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Gender</th>
                <td><?= $this->Main_model->text_decode($user->s_gender); ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Weight</th>
                <td><code><?= $user->i_weight; ?></code></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Height</th>
                <td colspan="5"><?= $user->i_height; ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Birthday</th>
                <td colspan="5"><?= $user->d_birthday; ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Blood type</th>
                <td colspan="5"><?= $this->Main_model->text_decode($user->s_blood); ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Drug allergy</th>
                <td colspan="5"><?= $this->Main_model->text_decode($user->s_allergy); ?></td>
            </tr>
            <tr>
                <th class="text-nowrap" scope="row">Congenital disease</th>
                <td colspan="5"><?= $this->Main_model->text_decode($user->s_disease); ?></td>
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
                    <td colspan="7"><?= $datetime; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row" width="200">Level Severity</th>
                    <td colspan="7"><?= $data->level; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">How to get hospital</th>
                    <td colspan="7"><?= $data->h_t_hospital; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Come by</th>
                    <td colspan="7"><?= $data->come_by; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">LMP</th>
                    <td colspan="7"><?= $data->lmp; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Symptoms</th>
                    <td colspan="7"><?= $data->symptoms; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Current symptoms <br/>/ first symptoms <br/>/ trauma</th>
                    <td colspan="7"><?= $data->all_symptoms; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Glasgow coma scale (GCS)</th>
                    <td colspan="5"><?= $data->gcs; ?></td>
                    <th class="text-nowrap" scope="row">E (Eye opening)</th>
                    <td colspan="5"><?= $data->e; ?></td>
                </tr>
               
                <tr>
                    <th class="text-nowrap" scope="row">V (Verbal response)</th>
                    <td colspan="5"><?= $data->v; ?></td>
                    <th class="text-nowrap" scope="row">M (Motor response)</th>
                    <td colspan="5"><?= $data->m; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">BT</th>
                    <td colspan="5"><?= $data->bt; ?></td>
                    <th class="text-nowrap" scope="row">BP</th>
                    <td colspan="5"><?= $data->bp; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">PR</th>
                    <td colspan="5"><?= $data->pr; ?></td>
                    <th class="text-nowrap" scope="row">O2sat</th>
                    <td colspan="5"><?= $data->o2sat; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Pain Score (PS)</th>
                    <td colspan="7"><?= $data->ps; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Nurse record</th>
                    <td colspan="7"><?= $recorder->s_first_name . " " . $recorder->s_last_name; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="card border border-info">
    <div class="card-header bg-transparent border-info">
        <h5 class="my-0 text-info"><i class="uil uil-user mr-3"></i>Examination Record</h5>
    </div>
    <div class="card-body">
        <!--<h5 class="card-title mt-0">card title</h5>-->
        <div class="table-responsive">
            <table class="table table-bordered table-nowrap mb-0">
                <tr>
                    <th class="text-nowrap" scope="row" width="200">Treatment</th>
                    <td><?= $data->treat; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row" width="200">Drug</th>
                    <td>
                        <?php
                        foreach ($data->drug as $key => $val) {
                            $_where = array('id' => $val->id);
                            $_select = array('s_name');
                            $data_drug = $this->Main_model->rowdata(TBL_DRUG, $_where, $_select);
                            ?>
                            <p><?= $data_drug->s_name; ?> : <?= $val->num; ?></p>
                        <?php }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row" width="200">Doctor Record</th>
                    <td colspan="5"><?= $doctor_recorder->s_first_name . " " . $doctor_recorder->s_last_name; ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row" width="200">Pharmacist record</th>
                    <td><?= $pharmacist_record->s_first_name . " " . $pharmacist_record->s_last_name; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>


<form id="form_treat" method="post">
    <input name="hn" value="<?= $_POST[hn]; ?>" type="hidden" />
    <input name="emr" value="<?= $_POST[emr]; ?>" type="hidden" />
    <input type="hidden" value="<?= $_COOKIE[user_id]; ?>" name="treat_record" />
    <!--<input type="hidden" value="<?= $this->session->userdata('user_id'); ?>" name="treat_record" />-->
    <!--<input type="hidden" value="<?= $data->doctor_record; ?>" name="doctor_record" />-->
    <!--<input type="hidden" value="<?= $data->nurse_record; ?>" name="nurse_record" />-->
    <div class="" style="padding: 15px; padding-bottom: 0px;">
        <div class="form-group row">
            <label for="" class="col-md-2 col-form-label">Diagnosis</label>
            <div class="col-md-10">
                <select class="form-control select2" name="diagnosis">
                    <option> Select diagnosis</option>
                    <?php
                    $_where = array('i_status' => 1);
                    $_select = array('*');
                    $dis = $this->Main_model->fetch_data('', '', TBL_DIAGNOSIS, $_where, $_select);
                    foreach ($dis as $key => $val) {
                        ?>
                    <option value="<?=$val->id;?>"><?=$val->s_name;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2 col-form-label">Treatment results</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="treat_res"></textarea>
            </div>
        </div>
    </div>
    <div style="padding: 15px;">
        <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1" onclick="submit_treat();">Submit data</button>
        <!--<button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1" onclick="test();">Submit x</button>-->
    </div>
</form>
