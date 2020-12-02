/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#form_admit').submit(function (event) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be save this data?",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes"
    }).then(function (t) {
        var fd = $('#form_admit').serialize();
        var url = base_url + "api/post_admit";
        $.ajax({
            url: url, // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            data: fd,
            type: 'post',
            success: function (res) {
                console.log(res);
//                t.value && Swal.fire("Success!", "Your file has been deleted.", "success");
//                window.location.reload();
            },
            error: function (e) {
                console.log(e)
            }
        });

    })

    event.preventDefault();

});

function select_patient(ele) {

    var val = $(ele).find(":selected").val();
    console.log(val);

    var url = base_url + "component/cpn_patient";
    var param = {
        id: val
    };
    $.post(url, param, function (html) {
        $('#load_patient_data').html(html);
    });

}