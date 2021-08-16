<?php

namespace dynamikaweb\vuejs;

class VueAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/vue/dist';

    public $js = [
        'vue.min.js',
    ];
}
