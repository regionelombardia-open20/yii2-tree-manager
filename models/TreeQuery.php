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

namespace kartik\tree\models;

use yii\db\ActiveQuery;
use creocoder\nestedsets\NestedSetsQueryBehavior;

/**
 * This is the base query class for the nested set tree
 */
class TreeQuery extends ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
