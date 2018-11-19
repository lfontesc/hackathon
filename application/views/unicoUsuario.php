<script>
            function excluirUsuario(idUsuario) {
                if (confirm('Deseja excluir o Usuario?')) {
                    location.href = '<?php echo base_url('/ControlUsuario/excluirUsuario/') ?>' + idUsuario;
                }
            }
</script>



    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      &nbsp;
      <section class="col-lg-12 connectedSortable">
        
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">Usuario

<?php
         if (isset($user)) {
           foreach ($user as $user) {
             ?>
                <div class="row">
                <div class="col-xs-12 col-lg-12">
                  <div class="col-xs-6 col-lg-4"><h3 ><span class="glyphicon glyphicon-user"></span> <?php echo $user->username; ?></h3>
                  </div>
                  <div class="col-xs-6 col-lg-8" align="right">
                    </div>

                </div>
                <div class="col-xs-12 col-lg-12">
                  <div class="col-xs-12 col-lg-12">
                      <a class="btn btn-danger" href="javascript:func()" onclick="excluirUsuario(<?php echo $user->id_user; ?>)"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                    </h2>
                    
                  </div>


            </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
            
              <tr>
                  <th>Nome</th>
                  <th>Tipo de Usuario</th>
                </tr>
              
                <tr>
                  <td><?php echo $user->username; ?></td>
                  <td><?php if($user->id_tipouser == 0){
                      echo "Engenheiro";
                  } else {
                      echo "Agente de Campo";
                  } ?></td>
               </tr>
              </table>
            </div>
      </section>
      <!-- right col -->
    </div>
    <?php
          }
        }
        ?>
    <!-- /.row (main row) -->

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->