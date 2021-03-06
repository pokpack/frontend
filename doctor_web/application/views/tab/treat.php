<div style="margin: 10px;">
    <h4 class="card-title">Treat list table</h4>
    <p class="card-title-desc">
<!--                                Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
        to make them scroll horizontally on small devices (under 768px).-->
    </p>
    <?php
//    echo "<pre>";
//    print_r($data);
//    echo "</pre>";
    ?>
    <div class="table-responsive">
        <table id="tb_treat" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>HN</th>
                    <th>Name</th>
                    <th>Severity</th>
                    <th>Date</th>
                    <th>Symptom</th>
                    <th>Status</th>
                    <th>EMR Id</th>
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
                    <tr>
                        <td><?= $num += 1; ?></td>
                        <td align="center"><?= $val->hn; ?></td>
                        <td><?= $first_name . " " . $last_name; ?></td>
                        <td><?= $val->level; ?></td>
                        <td><?= $datetime; ?></td>
                        <td><?= $val->symptoms; ?></td>
                        <td  align="center"><i class="fas fa-check"></i></td>
                        <td  align="center"><?= $val->emrId; ?></td>
                        <td align="center">
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="openModalTreat(<?= $val->hn; ?>,<?= $val->emrId; ?>);">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                <?php }
                ?>
                <!--                
                <tr>
                <td>2</td>
                <td align="center">2</td>
                <td>testname 02</td>
                <td>5</td>
                <td>2020-11-25 16:00:00</td>
                <td>Have a high fever</td>
                <td  align="center"><i class="fas fa-check"></i></td>
                <td align="center">
                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="openModalTreat(2);">
                    <i class="fas fa-edit"></i>
                </button>
                </td>
                </tr>-->
            </tbody>
        </table>
    </div>
</div>

<script>
    $("#tb_treat").DataTable();
    $('#count_treat_case').text('<?= count($data); ?>');

</script>