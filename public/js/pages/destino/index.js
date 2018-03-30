$(function(){
    const $tablaDestino = $("#tablaDestino"),
        $btnAdd = $("#btnAdd"),
        $btnUpdate = $("#btnUpdate"),
        $btnDelete = $("#btnDelete");
    $DataTableDestino = $tablaDestino.DataTable({
        "lengthChange": true,
        "select": true,
        "ajax": "./Destino/Listado",
        "columns": [
            { data: "cDestino", title: "Descripcion" },
            { data: "cDireccion", title: "Direccion" },
            { data: "cReferencia", title: "Referencia" }
        ]
    });

    function partialMant(id) {
        $.ajax({
            url: `./Destino/Mantenimiento/${id ? id:""}`,
            type: "GET",
            dataType: "html",
            success: function (data) {
                $("body").append(data);
                $(".parent>#modalDestinoMant").on("hidden.bs.modal", function () {
                    $DataTableDestino.ajax.reload(null,false);
                });
            },
            beforeSend: function () {
                $(".page-loader-wrapper").show();
            },
            complete: function () {
                $(".page-loader-wrapper").hide();
            }
        });
    }
    
    $btnAdd.on("click",function(){
        partialMant();
    })

    $btnUpdate.on("click",function(){
        var data = $DataTableDestino.rows( { selected: true } ).data()[0];
        if(data){
            partialMant(data.pkDestino);
        }else{
            swal({
                title: "Mantenimiento",
                text: "Debe Seleccionar un Item de la Tabla!!!",
                type: "error"
            });
        }
    })

    $btnDelete.on("click",function(){
        var data = $DataTableDestino.rows( { selected: true } ).data()[0];
        if(data){
            swal({
                    title: "Confirmacion",
                    text: "Estas seguro de Eliminar?",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                },
                function () {
                    $.ajax({
                        url: "./Destino/",
                        data:{
                            op: 3,
                            pkDestino: data.pkDestino
                        },
                        type: "POST",
                        success: function (data) {
                            if (data.status === true) {
                                swal({
                                    title: "Operacion Realizada!",
                                    timer: 4000,
                                    type: "success"
                                });
                                $DataTableDestino.ajax.reload(null,false);
                            } else {
                                swal({
                                    title: "Algo Salio Mal!",
                                    text: data.messages || data.messages != null ? data.messages:"Algo salio mal en el Servidor",
                                    timer: 4000,
                                    type: "error"
                                });
                            }
                        },
                        error: function () {
                            swal({
                                title: "Algo Salio Mal!",
                                text: "Algo salio mal en el Servidor",
                                timer: 4000,
                                type: "error"
                            });
                        },
                        beforeSend: function () {
                            $(".page-loader-wrapper").show();
                        },
                        complete: function () {
                            $(".page-loader-wrapper").hide();
                        }
                    });
                });
        }else{
            swal({
                title: "Mantenimiento",
                text: "Debe Seleccionar un Item de la Tabla!!!",
                type: "error"
            });
        }


    })
})