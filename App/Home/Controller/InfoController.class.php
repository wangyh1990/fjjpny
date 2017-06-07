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
 * @Last Modified time: 2016-06-21 12:39:47
 */
namespace Home\Controller;

use Common\Lib\Category;

class InfoController extends HomeCommonController
{
    //方法：index
    public function index()
    {
    	$item_id = I('item_id');
        $cid   = I('cid', 0, 'intval');
        $category_id = I('category_id', 0, 'intval');
    	$this->assign('id', $item_id);
        $this->assign('cid', $cid);
        $this->assign('category_id', $category_id);
    	$this->display();
    }

}
