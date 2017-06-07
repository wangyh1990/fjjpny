<?php
/**
 *　                  oooooooooooo
 *
 *                  ooooooooooooooooo
 *                       o
 *                      o
 *                     o        o
 *                    oooooooooooo
 *
 *         ～～         ～～         　　～～
 *       ~~　　　　　~~　　　　　　　　~~
 * ~~～~~～~~　　　~~~～~~～~~～　　　~~~～~~～~~～
 * ·······              ~~XYHCMS~~            ·······
 * ·······  闲看庭前花开花落 漫随天外云卷云舒 ·······
 * ·············     www.xyhcms.com     ·············
 * ··················································
 * ··················································
 *
 * @Author: gosea <gosea199@gmail.com>
 * @Date:   2014-06-21 10:00:00
 * @Last Modified by:   gosea
 * @Last Modified time: 2016-06-21 12:39:25
 */
namespace Home\Controller;
use Common\Controller\BaseController;


//公共验证控制器HomeCommonController
class HomeCommonController extends BaseController
{

    // 空操作，404页面
    public function _empty()
    {
        header("HTTP/1.1 404 Not Found");
        header("Status: 404 Not Found");
        $this->display(get_tpl('404.html'));
    }

    protected function _initialize()
    {
        parent::_initialize();
        $conf_base = array(
            //URL模式 ,0普通模式 ,1:PATHINFO模式（默认模式）,2:REWRITE模式,
            'URL_MODEL' => get_meta_value('HOME_URL_MODEL'),
            'URL_PATHINFO_DEPR' => get_meta_value('HOME_URL_PATHINFO_DEPR'),
            
            //路由
            'URL_ROUTER_ON' => get_meta_value('HOME_URL_ROUTER_ON'),
            'URL_ROUTE_RULES' => get_meta_value('HOME_URL_ROUTE_RULES'),

            //开启静态缓存
            'HTML_CACHE_ON' => get_meta_value('HOME_HTML_CACHE_ON'),
            'HTML_CACHE_RULES' => get_meta_value('HTML_CACHE_RULES_COMMON'),

            'DEFAULT_THEME'  => get_cfg_value('CFG_THEMESTYLE'),//默认主题风格
            //'TMPL_DETECT_THEME' => false, // 自动侦测模板主题
            //'THEME_LIST'=>'default,blog',//支持的模板主题项

            'TMPL_PARSE_STRING' => array(
                '__PUBLIC__' => __ROOT__. '/Public/'.MODULE_NAME. '/' . get_cfg_value('CFG_THEMESTYLE'),        
                '__DATA__' => __ROOT__. '/Data',
                '__AVATAR__' => __ROOT__. '/avatar',

            ),
        );
        
        C(array_merge(get_cfg_value(), $conf_base)); 

        if (C('CFG_WEBSITE_CLOSE') == 1) {
            exit_msg(C('CFG_WEBSITE_CLOSE_INFO'));
        }
    }

}
