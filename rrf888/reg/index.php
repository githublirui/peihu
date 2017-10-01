<?php

require_once '../include/common.inc.php';
require_once '../public/php/methtml.inc.php';

$met_title = '用户注册';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once ROOTPATH . 'member/captcha.class.php';
    $Captcha = new Captcha();
    $code = strtoupper($code);
    if (!$Captcha->CheckCode($code)) {
        echo("<script type='text/javascript'> alert('$lang_membercode'); window.history.back();</script>");
        exit;
    }

    //插入数据表
    $sql = "select * from `met_reguser` where mobile='{$regmobile}'";
    $regUser = $db->get_one($sql);
    $dateTime = date("Y-m-d H:i:s");


    if ($regUser) {
        echo("<script type='text/javascript'> alert('手机号已注册'); window.history.back();</script>");
        exit;
    } else {
        $query = "INSERT INTO `met_reguser` SET
						  username                 = '{$regusername}',
                                                  mobile            = '{$regmobile}',
						  create_at 		 = '{$dateTime}'";
        $db->query($query);
        echo("<script type='text/javascript'> alert('注册成功'); window.location.href='/';</script>");
        exit;
    }
}

include template('reg');
footer();
?>