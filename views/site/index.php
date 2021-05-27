<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;

?>
</div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
       
        <div class="item active">
          <img class="first-slide img-responsive" src="/img/hero-bg.jpg" alt="First slide">
          <div class="container">
          <div class="carousel-caption">
              <h1>Bem Vindo ao Cadê meu Médico.</h1>
              <p>Encontre seu médico e/ou a Especialidade Desjada Aqui.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
        
       
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/gallery/gallery-1.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
                <img src="/img/gallery/gallery-2.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-4">
                <img src="/img/gallery/gallery-3.jpg" alt="" class="img-responsive">
            </div>
        </div>  
        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
        <img src="/img/gallery/gallery-4.jpg" alt="" class="img-responsive">
        </div>
      </div>
      <hr class="featurette-divider">
      
      
      <div class="row">
        <?php Foreach ($medicos as $key => $medico): ?>
        <div class="col-lg-4 text-center">
        <img class="img-circle" src="<?php echo $medico->imagem ?>" alt="Foto do Dr. <?php echo $medico->Nome ?>" width="240" height="240">
          <h2><?php echo $medico->Nome ?></h2>
          <p><?php echo $medico->Crm ?></p>
          <p><a class="btn btn-default" href="<?php echo  yii\helpers\Url::toRoute(['medicos/view', 'id' => $medico->Medico_id]); ?>" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endforeach; ?>
      </div>
      <hr class="featurette-divider">