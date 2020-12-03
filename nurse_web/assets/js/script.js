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
                t.value && Swal.fire("Success!", "Your file has been deleted.", "success");
                window.location.reload();
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

function tabTreat() {
    var url = base_url + "index/tab_treat";
    $.post(url, function (ele) {
        $('#body_tab_treat').html(ele);
    });
}

function tabHistory() {
    var url = base_url + "index/tab_history";
    $.post(url, function (ele) {
        $('#body_tab_his').html(ele);
    });
}

function searchHn(val, type) {
//    console.log(val);
    if(val==""){
         $(".tr-"+type).show();
         return;
    }
    $(".text-"+type+"-hn").each(function (index) {

        var text = $(this).text();
        var id = $(this).data('id');
        
        console.log(text + " " + id + " : "+ val);
        if (val.toUpperCase().indexOf(text.toUpperCase()) > -1) {
            $('#tr_'+type+'_'+id).show();
        } else {
            $('#tr_'+type+'_'+id).hide();
        }

    });
}

function searchEmr(val, type) {
    console.log(val);
//    return;
    if(val==""){
         $(".tr-"+type).show();
         return;
    }
    $(".text-"+type+"-emr").each(function (index) {

        var text = $(this).text();
        var id = $(this).data('id');
        
        console.log(text + " " + id + " : "+ val);
        if (val.toUpperCase().indexOf(text.toUpperCase()) > -1) {
            $('#tr_'+type+'_'+id).show();
        } else {
            $('#tr_'+type+'_'+id).hide();
        }

    });
}

function searchSeverity(val, type) {

    if(val==""){
         $(".tr-"+type).show();
         return;
    }
    $(".text-"+type+"-sev").each(function (index) {

        var text = $(this).text();
        var id = $(this).data('id');
        
        console.log(text + " " + id + " : "+ val);
        if (val.toUpperCase().indexOf(text.toUpperCase()) > -1) {
            $('#tr_'+type+'_'+id).show();
        } else {
            $('#tr_'+type+'_'+id).hide();
        }

    });
}