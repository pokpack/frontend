/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$('#form_admit').submit(function (event) {
//
//    var fd = $(this).serialize();
//    var url = base_url + "api/post_admit";
//    $.ajax({
//        url: url, // point to server-side PHP script 
//        dataType: 'text', // what to expect back from the PHP script, if anything
//        data: fd,
//        type: 'post',
//        success: function (res) {
//            console.log(res);
//        },
//        error: function (e) {
//            console.log(e)
//        }
//    });
//    event.preventDefault();
//    
//});

function openModalPhc(hn, emr) {
    console.log(hn);
    $('#lg_modal').modal('toggle');
    var url = base_url + "index/dispense";
    var param = {
        hn: hn,
        emr: emr
    };
    $.post(url, param, function (ele) {
        $('#body_emr').html(ele);
    });
}

function openModalTreat(hn) {
    console.log(hn);
    $('#lg_modal_2').modal('toggle');
}

function appendDrug() {
    $('.row_drug').clone().last().appendTo("#box_drug");
    setTimeout(function () {
        $('.row_drug select').last().val('');
        $('.row_drug input').last().val(0);

        var id = parseInt($('#num_drug').val()) + 1;
        $('.row_drug').last().attr('id', 'box_drug_'+id);
        $('#num_drug').val(id)
        
        $('.row_drug button').last().attr('onclick', 'deleteDrug('+id+')');
    }, 50);
}

function submit_dis() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be save this data?",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes"
    }).then(function (t) {
        var fd = $('#form_dis').serialize();
        var url = base_url + "api/post_dis";
        $.ajax({
            url: url, // point to server-side PHP script 
            dataType: 'json', // what to expect back from the PHP script, if anything
            data: fd,
            type: 'post',
            success: function (res) {
                console.log(res);
                t.value && Swal.fire("Success!", "Your file has been deleted.", "success");
                window.location.reload();
            },
            error: function (e) {
                console.log(e)
            }
        });

    });
}

function deleteDrug(id){
    $('#box_drug_'+id).remove();
}