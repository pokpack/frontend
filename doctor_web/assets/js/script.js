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

function openModalDoc(hn, emr) {
    console.log(hn);
    $('#lg_modal').modal('toggle');

    var url = base_url + "index/exn";
    var param = {
        hn: hn,
        emr: emr
    };
    $.post(url, param, function (ele) {
        $('#body_exn').html(ele);
    });
}

function openModalTreat(hn, emr) {
    console.log(hn);
    $('#lg_modal_2').modal('toggle');
    var url = base_url + "index/treat";
    var param = {
        hn: hn,
        emr: emr
    };
    $.post(url, param, function (ele) {
        $('#body_treat').html(ele);
    });
}

function appendDrug() {
    $('.row_drug').last().clone().appendTo("#box_drug");
}


function submit_exn() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be save this data?",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes"
    }).then(function (t) {
        var fd = $('#form_exn').serialize();
        var url = base_url + "api/post_exn";
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

function tabTreat(){
    var url = base_url + "index/tab_treat";
    $.post(url, function (ele) {
        $('#body_tab_treat').html(ele);
    });
}

function submit_treat() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be save this data?",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes"
    }).then(function (t) {
        var fd = $('#form_treat').serialize();
        var url = base_url + "api/post_treat";
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