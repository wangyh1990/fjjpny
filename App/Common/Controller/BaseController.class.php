<?php
namespace Common\Controller;
use Think\Controller;
/**
 * 后台首页控制器
 * 
 */
class BaseController extends Controller {
    /**
     * 后台控制器初始化
     */
    protected function _initialize(){
        /* 墨家客户初始化操作 */ 
        //获取客户信息
        $domain_id = I('domain_id', 0);
        if ($domain_id) {
            $where['customer_id'] = $domain_id;
        } else {
            $where['domain|dnf'] = DOMAIN;
        }
        //var_dump($where);
        //$mcinfo = M('customer','','DB_MOOGA')->where($where)->find(); 
        $mcinfo = M('customer','','DB_MOOGA')->find(); 
        //var_dump($mcinfo);
        if (empty($mcinfo['db_config'])) {
            exit('系统暂时不能访问！');
        }
        $db_config = empty($mcinfo['db_config']) ? C('DB_DEFAULT') : json_decode($mcinfo['db_config'],true);
        $db_config['DB_PREFIX'] = 'xyh_';
        C($db_config);
    }
}
