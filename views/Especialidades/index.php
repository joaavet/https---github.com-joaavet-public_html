<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
$this->title = "Especialidades";
$this->params['breadcrumbs'][] = $this->title;

?>

  <h1>Especialidades</h1>
  <p>À medida em que a tecnologia e o conhecimento médico evoluíram no século XX, o exercício da profissão fragmentou-se cada vez mais. A figura do médico “clínico geral” que era aquele que atuava em todas as áreas não existe mais. <br><br>
  Nem sempre é fácil enquadrar as especialidades existentes nos 5 troncos clássicos (clínica médica, cirurgia geral, pediatria, ginecologia e obstetrícia e a saúde coletiva) ou mesmo definir o que é uma especialidade ou área de atuação (subespecialidade).</p>
    <div class="row">
      <?php foreach ($Vmodel as $key => $linha):?>
          <div class="col-lg-4">
            <img src="<?php echo $linha->Imagem?>" class="img-responsive" alt="<?php echo $linha->Titulo?>">
            <h2><?php echo $linha->Titulo?></h2>
            <?php echo $linha->SubTitulo?>
            <p><a class="btn btn-primary" href="<?php echo Url::to('especialidades/view')?>" role="button">Ver Detalhes »</a></p>
          </div>
          <?php if((++$key > 0)  and ($key % 3 == 0)):?>
            </div>
            <hr>  
            <div class="row">
          <?php endif;?>
      <?php endforeach; ?>
    </div>
      <hr>
</div>