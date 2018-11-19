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
              <h3 class="box-title">Cadastro de Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                <?php echo form_open('ControlUsuario/gravar') ?> 

                            <input type="hidden" name="acao" value="<?php
                            if (isset($user)) {
                                echo "Alterar";
                            } else {
                                echo "Inserir";
                            }
                            ?>"> 
                            <input type="hidden" name="id_user" value="<?php
                            if (isset($user)) {
                                foreach ($user as $user) {
                                    echo $user->id_user;
                                }
                            }
                            ?>">
                  <label for="text" class="col-sm-2 control-label">Nome de Usuario</label>
             <?php     if (isset($user)) {
                                            foreach ($user as $user) {
                                                echo $user->username;
                                            }
                                        }
                                        ?>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="nome de usuario">
                  </div>
                </div>
                <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Senha</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="senha">
                  </div>
                </div>
           

                  <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Tipo de Usuario</label>

                  <div class="radio">
                  <div class="col-sm-10">

                    <label>

                      <input type="radio" name="id_tipouser" id="id_tipouser" value="0">
                      Engenheiro
                    </label>
                  </div>
                  </div>
                  <div class="col-sm-10">

                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="id_tipouser" value="1">
                      Agente de campo
                    </label>
                    </div>
                    </div>
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
  