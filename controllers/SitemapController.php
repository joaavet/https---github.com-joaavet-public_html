<?php

namespace app\controllers;
class SitemapController extends \yii\web\Controller
{
    public function actionIndex(){
    header("Content-Type:  application/xml");
    return $this->renderPartial(index);
    }
}