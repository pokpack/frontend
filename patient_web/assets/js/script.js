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

function openHistory(hn, emr) {
    console.log(hn);
    $('#lg_modal').modal('toggle');
    var url = base_url + "index/history";
    var param = {
        hn: hn,
        emr: emr
    };
    $.post(url, param, function (ele) {
        console.log(ele);
        $('#body_his').html(ele);
    });
}