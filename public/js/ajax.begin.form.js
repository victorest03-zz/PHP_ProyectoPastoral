$(function(){
    function asyncRequest(element, options) {
        var confirm, loading;

        confirm = element.getAttribute("data-ajax-confirm");
        loading = $(element.getAttribute("data-ajax-loading"));

        $.extend(options, {
            beforeSend: function (xhr) {
                var result = getFunction(element.getAttribute("data-ajax-begin"), ["xhr"]).apply(element, arguments);
                if (result !== false) {
                    loading.show();
                }
                return result;
            },
            complete: function () {
                loading.hide();
                getFunction(element.getAttribute("data-ajax-complete"), ["xhr", "status"]).apply(element, arguments);
            },
            success: function (data, status, xhr) {
                getFunction(element.getAttribute("data-ajax-success"), ["data", "status", "xhr"]).apply(element, arguments);
            },
            error: function () {
                getFunction(element.getAttribute("data-ajax-failure"), ["xhr", "status", "error"]).apply(element, arguments);
            }
        });

        //options.data.push({ name: "X-Requested-With", value: "XMLHttpRequest" });

        if (confirm) {
            swal({
                    title: "Confirmacion",
                    text: confirm,
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                },
                function () {
                    $.ajax(options);
                });
        } else {
            $.ajax(options);
        }
    }

    function getFunction(code, argNames) {
        var fn = window, parts = (code || "").split(".");
        while (fn && parts.length) {
            fn = fn[parts.shift()];
        }
        if (typeof (fn) === "function") {
            return fn;
        }
        argNames.push(code);
        return Function.constructor.apply(null, argNames);
    }

    $(document).on("submit","form[data-ajax=true]",function (e) {
        e.preventDefault();
        asyncRequest(this, {
            url: this.action,
            type: this.method || "GET",
            data: new FormData(this),
            processData: false,
            contentType: false,
        });
    })
})