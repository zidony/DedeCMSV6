<?php
/**
 * 生成专题
 *
 * @version        $Id: makehtml_spec.php 1 11:17 2010年7月19日Z tianya $
 * @package        DedeCMS.Administrator
 * @copyright      Copyright (c) 2007 - 2020, DesDev, Inc.
 * @copyright      Copyright (c) 2020, DedeBIZ.COM
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/config.php");
CheckPurview('sys_MakeHtml');
if(empty($dopost)) $dopost = "";

if($dopost=="ok")
{
    require_once(DEDEINC."/arc.specview.class.php");
    $sp = new SpecView();
    $rurl = $sp->MakeHtml(0);
    echo "<link rel=\"stylesheet\" href=\"{$cfg_cmsurl}/static/css/bootstrap.min.css\"><style>.modal {position: static;}</style>";
    echo "<div class=\"alert alert-success\" role=\"alert\">成功生成所有专题HTML列表！<a href='$rurl' target='_blank' class='btn btn-secondary'>预览</a></div>";
    exit();
}
include DedeInclude('templets/makehtml_spec.htm');