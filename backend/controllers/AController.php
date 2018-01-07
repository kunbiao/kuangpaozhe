<?php
namespace backend\controllers;
use dosamigos\qrcode\QrCode;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
class AController extends Controller{
    public function actionPay(){
    ini_set('date.timezone','Asia/Shanghai');
    //error_reporting(E_ERROR);
    require_once DIR_LIB."/WxPay.Data.php";
    require_once DIR_LIB."/WxPay.Api.php";
    require_once DIR_EXA."/WxPay.NativePay.php";
    require_once DIR_EXA.'/log.php';
    $notify = new \NativePay();
$input = new \WxPayUnifiedOrder();
$input->SetBody("test"); //设置商品或支付单简要描述
$input->SetAttach("test");//设置附加数据，在查询API和支付通知中原样返回，该字段主要用于商户携带订单的自定义数据
$input->SetOut_trade_no(\WxPayConfig::MCHID.date("YmdHis"));//设置商户系统内部的订单号,32个字符内、可包含字母, 其他说明见商户订单号
$input->SetTotal_fee("1");//设置订单总金额，只能为整数，详见支付金额
$input->SetTime_start(date("YmdHis"));//获取订单总金额，只能为整数，详见支付金额的值
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");//设置商品标记，代金券或立减优惠功能的参数，说明详见代金券或立减优惠
$input->SetNotify_url("http://pay.perobot.ai/");//设置接收微信支付异步通知回调地址
$input->SetTrade_type("NATIVE");//设置取值如下：JSAPI，NATIVE，APP，详细说明见参数规定
$input->SetProduct_id("123456789");//设置trade_type=NATIVE，此参数必传。此id为二维码中包含的商品ID，商户自行定义。
//var_dump($input);die;
$result = $notify->GetPayUrl($input);
$url2 = $result["code_url"];
        return $url2;
    }
    public function actionQrcode()
    {
//        data=<?php echo urlencode($url2)

//        return QrCode::png("https://www.baidu.com");
//        return QrCode::png("http://paysdk.weixin.qq.com/example/qrcode.php?data=".urlencode($a));

    }
    public function actionIndex(){
//        var_dump(json_encode(1));
        $data[1]=22;
//        var_dump($data);die;
       return json_encode($data);
//        Freedom::yell();
        $a=$this->actionPay();
        echo '<img src=http://paysdk.weixin.qq.com/example/qrcode.php?data='.urlencode($a).'>';
//        $sign=MD5(stringSignTemp).toUpperCase()="9A0A8659F005D6984697E2CA0A9CF3B7"
    }
    public function actionDemo()
    {
        return $this->render('index');
    }
}

