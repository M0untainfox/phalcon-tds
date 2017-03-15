<?php

class TestController extends \Phalcon\Mvc\Controller
{
    protected $semantic;
    public function indexAction()
    {

    }
    public function initialize()
    {
        $this->semantic = $this->jquery->semantic();
    }
    public function hideShowAction(){
        $ck = $this->semantic->htmlCheckbox("ckShowHide","afficher/masquer");
        $message = $this->semantic->htmlMessage("zone","C'est pas ouf");
        $ck->on("change",$message->jsToggle("$(this).prop('checked')"));
        $this->jquery->compile($this->view);
    }
}

