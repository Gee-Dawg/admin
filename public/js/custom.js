jQuery.extend({
    doAJAX: function (url, data, type, callback)
    {
        if (type.toLowerCase() != "get")
        {
            data["_token"] = _token;
        }

        if (!type)
        {
            type = "GET";
        }

        return $.ajax({
            type: type,
            url: url,
            data: data,
            dataType: "json",
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                notify('error',"Error Code: " + XMLHttpRequest.status + " : " + XMLHttpRequest.statusText);
            },
            success: function (data)
            {
                callback(data);
            }
        });
    }
});

function notify(type, msg, title, time_out)
{
    toastr.options = {
        "closeButton": true,
        "closeHtml": "<i class='glyphicon glyphicon-remove-sign'></i>",
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": (time_out != undefined) ? time_out : 2000,
        "extendedTimeOut": 0,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    toastr[type](msg, title);
}