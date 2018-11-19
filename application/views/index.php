  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $totalPoste;?></h3>

            <p>Postes Cadastrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo base_url('ControlPoste/listaPostes');?>" class="small-box-footer">Ver Postes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>40<sup style="font-size: 20px">%</sup></h3>

            <p>Postes Regulares</p>
          </div>
          <div class="icon">
            <i class="ion ion-checkmark"></i>
          </div>
          <a href="<?php echo base_url('ControlPoste/listaPostes');?>" class="small-box-footer">Ver Postes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>
            <p>Postes Irregulares</p>
          </div>
          <div class="icon">
            <i class="ion ion-close"></i>
          </div>
          <a href="<?php echo base_url('ControlPoste/listaPostesIrreg');?>" class="small-box-footer">Ver Postes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $totalDispo;?></h3>

            <p>Disponivel para Contratos</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-paper"></i>
          </div>
          <a href="<?php echo base_url('ControlPoste/listaPostesDispo');?>" class="small-box-footer">Ver Postes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        
      <div id="map" style="width: 100%; height: 500px;"></div>
          Conteudo das Paginas Aqui
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  