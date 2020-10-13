window.dataLayer = window.dataLayer || [];

let init_px = window.pageYOffset;
window.onscroll = function () {
    let header = $("#header.header-dinamic");
    let header_height = header.height() + parseInt($("#header").css("padding-top")) + parseInt($("#header").css("padding-bottom"));

    let movement_px = window.pageYOffset;
    if(init_px >= header_height) {

        if(init_px >= movement_px) {


            header.css("top", "0px");
            header.css("position", "fixed");
        } else {

            header.css("top", "-100px");
        }
    } else {

        if(init_px > header_height) {

            header.css("top", "0px");
            header.css("position", "absolute");
        }
    }

    init_px = movement_px;
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
};

function gtag(){
    dataLayer.push(arguments);
}

class CookieConstruct {

    update(name, params, secure = false) {
        let cook_param = this.getCookieParams(name);
        let separate_param = this.separeParams(params);

        let new_params = "";
        Object.keys(cook_param).forEach(function (e) {

            if(separate_param[e] !== undefined) {

                new_params = new_params + e + "=" + separate_param[e] + "; ";
            } else {

                new_params = new_params + e + "=" + cook_param[e] + "; ";
            }
        });

        if(secure === true) {

            new_params = new_params + "Secure;";
        }

        document.cookie = new_params;
    }

    getCookieParams(name) {

        document.cookie = "name=" + name;
        let cook = document.cookie;
        let params = this.separeParams(cook);

        return params;
    }

    separeParams(params) {

        let params_split = params.split("; ");

        let param = new Array();
        for (var i=0; i < params_split.length; i++) {

            let params_separate = params_split[i].split("=");
            let param_name  = params_separate[0];
            let param_value = params_separate[1];
            param[param_name] = param_value;
        }

        return param;
    }
}
