

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      &nbsp;
      <section class="col-lg-12 connectedSortable">
        
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
              <tr>
                  <th>Nome</th>
                  <th>Tipo de Usuario</th>
                </tr>
              <?php
                            if (isset($user)) {
                              foreach ($user as $user) {
                                ?>  
              
                <tr>
                  <td><a href="<?php echo base_url("index.php/ControlUsuario/DadosUnicoUsuario/$user->id_user"); ?>"><?php echo $user->username; ?></td>
                  <td><?php if($user->id_tipouser == 0){
                      echo "Engenheiro";
                  } else {
                      echo "Agente de Campo";
                  } ?></td>
               </tr>
               <?php
                              }
                            }
                            ?>                
              </table>
            </div>
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->