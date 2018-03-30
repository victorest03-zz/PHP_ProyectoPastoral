<?php $model = $this->model ?>
<div class="parent">
    <div class="modal fade" id="modalDestinoMant" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="smallModalLabel">Mantenimiento de Destino</h4>
                </div>
                <form action="Destino" method="post" data-ajax="true" data-ajax-confirm="Estas Seguro?" data-ajax-success="onSuccessDestino" data-ajax-failure="onFailureDestino">
                <div class="modal-body">
                    <input type="hidden" id="op" name="op" value="<?php print $model->pkDestino == 0 ? 1:2 ?>">
                    <input type="hidden" id="pkDestino" name="pkDestino" value="<?php print $model->pkDestino ?>">
                    <label for="cDestino">Descripcion</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="cDestino" name="cDestino" class="form-control" placeholder="Ingrese destino" value="<?php print $model->cDestino ?>">
                        </div>
                    </div>
                    <label for="cDireccion">Direccion</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="3" id="cDireccion" name="cDireccion" class="form-control" placeholder="Ingrese Direccion" maxlength="150"><?php print $model->cDireccion ?></textarea>
                        </div>
                    </div>
                    <label for="cDireccion">Referencia</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="3" id="cReferencia" name="cReferencia" class="form-control" placeholder="Ingrese Referencia" maxlength="150"><?php print $model->cReferencia ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary waves-effect" id="btnGuardarSalir">Guardar</button>
                    <?php if($model->pkDestino == 0){ ?>
                    <button type="submit" class="btn btn-primary waves-effect" id="btnGuardarNuevo">Guardar y Nuevo</button>
                    <?php }?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="public/js/pages/destino/_mant.js?v=<?php print microtime(true)*10000 ?>"></script>