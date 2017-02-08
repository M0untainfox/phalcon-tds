<?php

class UsersController extends ControllerBase
{

    public function indexAction()
    {
        $users=User::find();
        $this->view->setVar("users",$users);
    }

}
