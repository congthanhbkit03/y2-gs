<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Loaibds;

class TopnavWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        $loai = new Loaibds();
        $dataloai = $loai->getAllLoaibds();
        return $this->render('TopNavWidget', ['dataloai' => $dataloai]);
    }
}
?>