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
