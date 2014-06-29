<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('title', '一封寄往远处的信');
        $this->assign('body','我和我的家人，都很爱你。<br />只希望你,不要想多，我爸妈，对家人是非常好<br />这些生活，还没体验，就下结论，太潦草<br />也许我不会富有，但我会把最好的，都给你。<br />只愿你幸福快乐。');
        $this->display();
    }
}