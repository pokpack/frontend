<?php 
//
//echo "<pre>";
//print_r($data);
//echo "</pre>";
//exit();
?>

<!--<div style="margin: 10px;">
    <div data-repeater-list="group-a">
        <div data-repeater-item="" class="row">
            <div class="form-group col-lg-2">
                <label for="emrId">EMR Id</label>
                <input type="number" id="emr" name="emrId" class="form-control" onkeyup="searchEmr(this.value, 'his');">
            </div>

            <div class="form-group col-lg-2">
                <label for="hn">HN</label>
                <input type="number" id="hn" class="form-control"  onkeyup="searchHn(this.value, 'his');">
            </div>

            <div class="form-group col-lg-2">
                <label for="subject">Severity</label>
                <input type="text" id="severity" name="severity" class="form-control" onkeyup="searchSeverity(this.value, 'his');">
            </div>
        </div>

    </div>
</div>-->
<div style="margin: 10px;">
    <h4 class="card-title">History list table</h4>
    <p class="card-title-desc">
<!--                                Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
        to make them scroll horizontally on small devices (under 768px).-->
    </p>
    <div class="table-responsive">
        <table id="tb_his" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>HN</th>
                    <th>Name</th>
                    <th>Severity</th>
                    <th>Date</th>
                    <th>Symptom</th>
                    <th style="text-align: center;">EMR Id</th>
                    <th>Treat</th>
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
                    
                    $first_name = $this->Main_model->text_decode($user->s_first_name);
                    $last_name = $this->Main_model->text_decode($user->s_last_name);
                    ?>
                    <tr id="tr_treat_<?= $val->id; ?>" class="tr-treat">
                        <td><?= $num += 1; ?></td>
                        <td align="center"><span data-id="<?= $val->id; ?>" class="text-treat-hn"><?= $user->i_hn; ?></td>
                        <td><?= $first_name . " " . $last_name; ?></td>
                        <td><span data-id="<?= $val->id; ?>" class="text-treat-sev"><?= $val->level; ?></span></td>
                        <td><?= $datetime; ?></td>
                        <td><?= $val->symptoms; ?></td>
                        <td style="text-align: center;"><span data-id="<?= $val->id; ?>" class="text-treat-emr"><?= $val->emrId; ?></span></td>
                        <td align="center">
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="openModalHis(<?= $val->hn; ?>,<?= $val->emrId; ?>);">
                                <i class="fas fa-history"></i>
                            </button>
                        </td>
                    </tr>
                <?php }
                ?>
        </table>
    </div>
</div>

<script>
    $('#count_his_case').text('<?=count($data);?>');
    $("#tb_his").DataTable();
</script>