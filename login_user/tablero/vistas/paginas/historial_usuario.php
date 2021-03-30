<?php $usuario = ControladorFormulario::ctrSeleccionarRegistros(); ?>

<section class="content">
    <div class="container p-3">
        <div class="row justify-content-center">                
            <div class="col-9 col-sm-7 col-md-5 col-lg-4 col-xl-4 p-2">
                <h3 class="text-center">Página de usuario</h3>
            </div>
        </div>
       <br>

        <div class="row">
            <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 p-2 d-flex justify-content-center">            
                <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>
        </div>    
    </div> 
    <br>   
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Nombre de usuario</th>
                                <th>Correo electrónico</th>                                  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuario as $key => $valor): ?>
                                <tr>
                                    <td><?php echo $key+1;   ?></td>
                                    <td><?php echo $valor["nombre"];   ?></td>
                                    <td><?php echo $valor["email"];   ?></td>
                                      <td>
                                        <div class="btn-group">
                                            <button class="btn btn-warning">Editar</button>
                                            <button class="btn btn-danger">Borrar</button> 
                                        </div>
                                    </td>            
                                </tr>                                        
                            <?php endforeach; ?>                                  
                        </tbody>        
                    </table>
                </div>
            </div>
        </div>
    </div>         
</section>
