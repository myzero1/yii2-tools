<?php
/**
 * @link https://github.com/myzero1/tools
 * @copyright Copyright (c) 2013-2017 myzero1! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace myzero1\y2tools\assets;
use yii\web\AssetBundle;
/**
 * FileUploadAsset
 *
 * @author Antonio Ramirez <myzero1@sina.com>
 */
class ToolsAsset extends AssetBundle
{
    public $sourcePath = '@backend/module/tools/assets/plugins';
    public $css = [
        'upload/css/base.css'
    ];
    public $js = [
        'upload/js/base.js'
    ];
    public $depends = [
        'myzero1\y2tools\assets\BlueimpFileUploadAsset',
    ];
}