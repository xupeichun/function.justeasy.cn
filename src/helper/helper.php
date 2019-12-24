<?php
/**
 * Created by PhpStorm.
 * User: xupeichun
 * Date: 2019/12/24
 * Time: 17:04
 */


if (!function_exists('createDir'))
{
    function createDir($path) {
        if (!file_exists($path)) {
            createDir(dirname($path));
            mkdir($path, 0777);
        }
    }
}


if (!function_exists(''))
{
    if (!function_exists('isPhone')) {
        function isPhone($isPhone)
        {
            if (!is_numeric($isPhone))
            {
                return false;
            }

            return preg_match('#^1[3,4,5,6,7,8,9]{1}[\d]{9}$#', $isPhone) ? true : false;
        }
    }
}


if(!function_exists('checkPasswd'))
{
    function checkPasswd($pwd = '')
    {
        $result = ['code' => 500, 'message' => ''];
        if (strlen($pwd)<6 || strlen($pwd)>16)
        {
            $result['message'] = '密码必须为6-16位的字符串';
        }
        if(preg_match("/^\d*$/",$pwd))
        {
            $result['message'] = '密码必须包含字母,强度:弱';//全数字
        }
        if(preg_match("/^[a-z]*$/i",$pwd))
        {
            $result['message'] = "密码必须包含数字,强度:中";//全字母
        }
        if(!preg_match("/^[a-z\d]*$/i",$pwd))
        {
            $result['message'] = "密码只能包含数字和字母,强度:强";//有数字有字母 ";
        }
        if (!empty($result['message']))
            return $result;

        $result['code'] = 200;
        return $result;
    }
}
