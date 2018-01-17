<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //处理news.txt数据
        $dir="/opt/htdocs/JUANPI_V3/news.txt";
        $content=$this->getData($dir);
        //根据基数偶数处理数组
        foreach ($content as $k => $v) {
            if ($k % 2 == 0) {
                $title[] = $v;
            } else {
                $url[] = $v;
            }
        }
        $list = array_combine($title, $url);
        //处理days.txt数据
        $dir="/opt/htdocs/JUANPI_V3/days.txt";
        $content=$this->getData($dir);
        //根据7个一组处理数组
        foreach ($content as $k=>$v){
            if($k<=6){
                $days[] = $v;
            }
            else{
                $weathers[]=$v;
            }
        }
        $wea = array_combine($days, $weathers);
        $this->assign('list', $list);
        $this->assign('wea', $wea);
        $this->display();
    }

    /**
     * 进行文件IO操作获取数据源
     * @param $dir
     * @return String
     */
    public function getData($dir){
        $file = fopen($dir, "r") or die("Unable to open file!");
        $content = fread($file, filesize($dir));
        fclose($file);
        //转成gbk格式
        $content = iconv("utf-8", "gbk//ignore", $content);
        $content = explode(',', $content);
        return $content;
    }
}