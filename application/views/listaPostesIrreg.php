

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
              <h3 class="box-title">Lista de Postes Irregulares</h3>
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
              <?php
                            if (isset($listaPostesIrreg)) {
                              foreach ($listaPostesIrreg as $listaPostesIrreg) {
                                ?>  
              
                <tr>
                  <td><a href="<?php echo base_url("index.php/ControlPoste/DadosUnicoPoste/$listaPostesIrreg->id_poste"); ?>"><?php echo $listaPostesIrreg->id_poste; ?></td>
                  <td><?php echo $listaPostesIrreg->nm_municipio ?></td>
                  <td><?php echo $listaPostesIrreg->longitude ?></td>
                  <td><?php echo $listaPostesIrreg->latitude ?></td>
                  <td><?php echo $listaPostesIrreg->n_cabos ?></td>
                  <td><?php echo $listaPostesIrreg->dt_ult_visita ?></td>
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