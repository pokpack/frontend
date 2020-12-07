<?php 
//echo "<pre>";
//print_r($data);
//echo "</pre>";
?>
<div class="card border border-primary">
    <div class="card-header bg-transparent border-primary">
        <h5 class="my-0 text-primary"><i class="uil uil-user mr-3"></i>Testname 01</h5>
    </div>
    <div class="card-body">
        <!--<h5 class="card-title mt-0">card title</h5>-->
        <table class="table table-bordered table-nowrap mb-0">
            
                <tr>
                    <th class="text-nowrap" scope="row" width="200">HN Id</th>
                    <td><?=$data->i_hn;?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Gender</th>
                    <td><?= $this->Main_model->text_decode($data->s_gender);?> </td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Weight</th>
                    <td><?= $data->i_weight;?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Height</th>
                    <td colspan="5"><?=$data->i_height;?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Birthday</th>
                    <td colspan="5"><?=$data->d_birthday;?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Blood type</th>
                    <td colspan="5"><?= $this->Main_model->text_decode($data->s_blood); ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Drug allergy</th>
                    <td colspan="5"><?= $this->Main_model->text_decode($data->s_allergy); ?></td>
                </tr>
                <tr>
                    <th class="text-nowrap" scope="row">Congenital disease</th>
                    <td colspan="5"><?= $this->Main_model->text_decode($data->s_disease);?></td>
                </tr>

        </table>
    </div>
</div>
