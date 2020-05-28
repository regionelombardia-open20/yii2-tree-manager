<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    Open20Package
 * @category   CategoryName
 */

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2017
 * @package   yii2-tree-manager
 */

namespace kartik\tree;

use kartik\base\AssetBundle;

/**
 * Asset bundle for TreeView widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class TreeViewAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\widgets\ActiveFormAsset',
        'yii\validators\ValidationAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/kv-tree']);
        $this->setupAssets('css', ['css/kv-tree']);
        parent::init();
    }
}
