<?php

// +----------------------------------------------------------------------
// | framework
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://framework.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/framework
// +----------------------------------------------------------------------

namespace app\admin\logic\update;

use app\admin\logic\Update;

/**
 * 更新所在模块指令
 * Class UpdateAll
 * @package app\admin\logic\update
 */
class UpdateAll extends Update
{
    /**
     * 配置入口
     */
    protected function configure()
    {
        $this->modules = ['application/admin/', 'application/wechat/', 'application/service/', 'public/static/'];
        $this->setName('update:all')->setDescription('Sync Update Admin & Wechat & Service & Plugs Module Code for ThinkAdmin');
    }
}