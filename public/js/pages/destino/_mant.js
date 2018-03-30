var onSuccessDestino,onFailureDestino;

$(function(){
    var $flag;
    $modalDestinoMant = $('#modalDestinoMant');

    $modalDestinoMant.find("#btnGuardarNuevo,#btnGuardarSalir").on("click",function(){
        const id = $(this).attr("id");
        if(id === "btnGuardarSalir"){
            $flag = 1;
        }else{
            $flag = 2;
        }
    })

    $modalDestinoMant.on("hidden.bs.modal", function () {
        $(this).parent().remove();
    });

    onSuccessDestino = function (data) {
        if (data.status === true) {
            swal({
                title: "Operacion Realizada!",
                timer: 4000,
                type: "success"
            });
            if ($flag === 1)
                $modalDestinoMant.modal("hide");
            else {
                $modalDestinoMant[0].reset();
            }
        } else {
            swal({
                title: "Algo Salio Mal!",
                text: data.messages || data.messages != null ? data.messages:"Algo salio mal en el Servidor",
                timer: 4000,
                type: "error"
            });
        }
    };

    onFailureDestino = function () {
        swal({
            title: "Algo Salio Mal!",
            text: "Algo salio mal en el Servidor",
            timer: 4000,
            type: "error"
        });
    };

    $modalDestinoMant.modal("show");
})