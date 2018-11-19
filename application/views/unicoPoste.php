<script>
            function excluirUsuario(idUsuario) {
                if (confirm('Deseja excluir o Poste?')) {
                    location.href = '<?php echo base_url('/ControlPoste/excluirPoste/') ?>' + idUsuario;
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
            <div class="box-header with-border"><h3>Poste</h3>

<?php
         if (isset($poste)) {
           foreach ($poste as $poste) {
             ?>
                <div class="row">
                <div class="col-xs-12 col-lg-12">
                  <div class="col-xs-6 col-lg-4"><h3 ><img src="<?php echo base_url('dist/img/lampada.png'); ?>"/>Identificação do Poste:  <?php echo $poste->id_poste; ?></h3>
                  </div>
                  <div class="col-xs-6 col-lg-8" align="right">
                    </div>

                </div>
                <div class="col-xs-12 col-lg-12">
                  <div class="col-xs-12 col-lg-12">
                      <a class="btn btn-danger" href="javascript:func()" onclick="excluirUsuario(<?php echo $poste->id_poste; ?>)"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                    </h2>
                    
                  </div>


            </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
            
              <tr>
                  <th>Identificação</th>
                  <th>Municipio</th>
                  <th>Longitude</th>
                  <th>Latitude</th>
                  <th>Numero de Cabos</th>
                  <th>Data da Ultima Visita</th>
                </tr>
              
                <tr>
                  <td><a href="<?php echo base_url("index.php/ControlPoste/DadosUnicoPoste/$poste->id_poste"); ?>"><?php echo $poste->id_poste; ?></td>
                  <td><?php echo $poste->nm_municipio ?></td>
                  <td><?php echo $poste->longitude ?></td>
                  <td><?php echo $poste->latitude ?></td>
                  <td><?php echo $poste->n_cabos ?></td>
                  <td><?php echo $poste->dt_ult_visita ?></td>
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