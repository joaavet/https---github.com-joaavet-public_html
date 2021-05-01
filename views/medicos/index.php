<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = "Medicos";

?>
<div class="container">
<h1>Medicos</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<div class="row">
      <?php foreach ($medicos as $key => $linha):?>
          <div class="col-lg-3 text-center">
            <img src="<?php echo $linha->Imagem?>" class="img-responsive img-circle" alt="<?php echo $linha->Nome?>">
            <h2><?php echo $linha->Nome?></h2>
             <p>
                CRM: <?php echo $linha->CRM?><br>
                Email: <?php echo $linha->Email?><br>
                Telefone: <?php echo $linha->Telefone?> <br>
                  
             </p>
             
            <p><a class="btn btn-primary" href="<?php echo Url::to('especialidades/view')?>" role="button">Ver Detalhes »</a></p>
          </div>
          <?php if((++$key > 0)  and ($key % 3 == 0)):?>
            </div>
            <hr>  
            <div class="row">
          <?php endif;?>
      <?php endforeach; ?>
    </div>
</div>