<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Lopday;

class LopmoiWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        $lop = new Lopday();
        $dslopmoi = $lop->getLopmoi(20);
        // print "<pre>";
        // print_r($dslopmoi);
        // print "</pre>"; exit;
        return $this->render('LopmoiWidget', ['dslopmoi' => $dslopmoi]);
    }
}
?>