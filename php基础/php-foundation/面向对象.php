<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;
    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

}
$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
echo $runoob->getTitle();
echo "<br>";
echo $taobao->getTitle();
echo "<br>";
echo $google->getTitle();
echo "<br>";
echo $runoob->getUrl();
echo "<br>";
echo $taobao->getUrl();
echo "<br>";
echo $google->getUrl();