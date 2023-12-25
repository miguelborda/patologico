 <!--extends se situa en views-->
<?php $__env->startSection('titulo'); ?>
 - Medicos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>

<div class="row table-responsive d-flex justify-content-center" style="font-size: 14px;">
    <div class="col-md-3 mt-5">
        <form action="" method="post" class="border border-info" id="formRegistrarMedico" autocomplete="off">
            
        <h5 class="box-title text-center font-weight-bold mt-2">Registrar nuevo servicio</h5>
            <?php echo csrf_field(); ?>
            <div class="form-row mt-2">
                <div class="form-group col-md-10 col-sm-6 ml-4">
                    <label class="font-weight-bold">Nombre del Servicio</label>
                    <input type="text" class="form-control" name="servicioR" id="servicioR" placeholder="Ingrese un servicio">
                </div>
                <div class="form-group col-md-10 col-sm-6 ml-4">
                    <label class="font-weight-bold">Responsable del servicio</label>
                    <select class="form-control custom-select select2" style="width: 100%" name="personaR" id="personaR">
                        <option value="0" disabled selected>Selecione una opcion</option>
                        
                    </select>
                </div>
                <div class="form-group col-md-10 col-sm-6 ml-4">
                    <button type="submit" id="registrar" class="btn btn-outline-success">Registrar</button>
                    <button type="reset" id="cancelarBtn" class="btn btn-outline-secondary m-2">Limpiar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-9">
       
        <h4 class="box-title text-center font-weight-bold mt-2">Lista de Servicios</h4>
        <table id="listaServicios" class="table table-sm table-bordered table-striped table-responsives"  width="100%">
            <thead>
                <tr>
                    <th width="20px">Nro.</th>
                    <th width="180px">Nombre</th>
                    <th width="200px">Responsable</th>
                    <th width="100px">Estado</th>
                    <th width="150px">Opciones</th>
                </tr>
            </thead>
            <tbody id="tablaRegistros">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
            </tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Home/index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\patologico\resources\views/Medicos/index.blade.php ENDPATH**/ ?>