<?php
/**
 *
 * @copyright Copyright (c) 2020 cleverstone
 *
 */

namespace app\admin\controllers;

use app\builder\common\CommonController;

/**
 * 计划任务监控
 * @author cleverstone
 * @since ym1.0
 */
class OpsCronController extends CommonController
{
    /**
     * {@inheritdoc}
     */
    public $actionVerbs = [
        'index' => ['get'],
    ];

    /**
     * 计划任务监控列表
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}