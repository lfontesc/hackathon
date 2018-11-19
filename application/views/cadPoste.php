  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- ./col -->
      <!-- ./col -->
    
    
      <!-- ./col -->
     
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        
      <!-- Horizontal Form -->
      
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de Postes</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                <?php echo form_open('ControlPoste/gravar') ?> 

                            <input type="hidden" name="acao" value="<?php
                            if (isset($poste)) {
                                echo "Alterar";
                            } else {
                                echo "Inserir";
                            }
                            ?>"> 
                            <input type="hidden" name="id_poste" value="<?php
                            if (isset($poste)) {
                                foreach ($posters as $poste) {
                                    echo $poste->id_poste;
                                }
                            }
                            ?>">

                  <label for="text" class="col-sm-2 control-label">Nome do Municipio</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nm_municipio" placeholder="nome do municipio">
                  </div>
                </div>
                <!-- form de 1 espaço -->
                <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Numero de Cabos (Pontos)</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="n_cabos" placeholder="numero de cabos">
                  </div>
                </div>
             <!-- form de 1 espaço -->
              <!-- form de 1 espaço -->
              <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Longitude</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="longitude" placeholder="Informe a Longitude">
                  </div>
                </div>
             <!-- form de 1 espaço -->
               <!-- form de 1 espaço -->
               <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Latitude</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="latitude" placeholder="Informe a Latitude">
                  </div>
                </div>
             <!-- form de 1 espaço -->
                <!-- form de 1 espaço -->
                <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Data da Ultima Revisão</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="dt_ult_visita" placeholder="Informe a ultima revisão">
                  </div>
                </div>
             <!-- form de 1 espaço -->
                  
                  <!-- select -->
                  <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Responsavel pelo Cadastro</label>
                  <select name="id_user" class="form-control">
             <?php     if (isset($user)) {
                              foreach ($user as $user) {
                                  echo $user->username; ?>
                                  <option value="<?php echo $user->id_user ?>"><?php echo $user->username ?> </option> <?php } ?>
                              <?php  ?>
                  
                            <?php } ?>
                  </select>
                </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="text" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right" ><?php
                                if (isset($users)) {
                                    echo 'Alterar';
                                } else {
                                    echo 'Cadastrar';
                                }
                                ?></button>
              </div>
              <?php form_close() ?>
             
              <!-- /.box-footer -->
          
          </div>
          <!-- /.box -->
                              </div>
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  