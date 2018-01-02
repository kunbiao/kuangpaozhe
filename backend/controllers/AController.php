<?php
namespace backend\controllers;
use dosamigos\qrcode\QrCode;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
class AController extends Controller{
    public function actionQrcode()
    {
//        return QrCode::png('http://www.yii-china.com');    //调用二维码生成方法
        return QrCode::png("http://www.baidu.com");
    }
    public function actionIndex(){
        echo "<img src=".Url::to(['a/qrcode']).">";
            var_dump(111);die;
    }
    public function actionDemo()
    {
        return $this->render('index');
    }
}