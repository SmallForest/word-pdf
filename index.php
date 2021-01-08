<?php
/**
 * Created by PhpStorm.
 * User: smallForest<1032817724@qq.com>
 * Date: 2021/1/6
 * Time: 17:44
 */
require_once "vendor/autoload.php";
//引入TemplateProcessor
use PhpOffice\PhpWord\TemplateProcessor;

//实例化, 参数传入模板文件地址
$templateProcessor = new TemplateProcessor('word/iamking.docx');

//替换(设置)变量值，我在测试的时候替换的字符比较长，这里缩短了
$templateProcessor->setValue('kouhao', '我是测试口号！奥利给nice');
$templateProcessor->setValue('date', '2021-10-01');

//保存文件
$templateProcessor->saveAs('word/iamking2.docx');
