<?php

namespace dashboard\modalpage;

use yii\web\AssetBundle;

class ModalPageAsset extends AssetBundle {
    public $sourcePath = '@vendor/dashboard/modal-page/assets';
    public $css = [];
    public $js = [
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}