
let init_px = window.pageYOffset;
window.onscroll = function () {

    let movement_px = window.pageYOffset;
    if(init_px >= movement_px) {

        $("#header").css("top", "0px");
    } else {

        $("#header").css("top", "-100px");
    }

    init_px = movement_px
}




function AjaxForm(e, form_id, success_function) {
    e.preventDefault();

    let form = $(form_id);
    let url = form.attr('action');
    let method = form.attr('method');

    $.ajax({
        type: method,
        url: url,
        data: form.serialize(),
        success: function (e) {
            success_function(e, form_id);
        },
        error: function (e) {
            success_function(e.status);
        }
    });
}

function SuccessAjax(response, form_id) {
    alert(response);
}
