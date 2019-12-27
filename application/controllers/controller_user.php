<?php

class Controller_user extends Controller
{
    function action_register()
    {
        /** @var Model_Register $model */
        $this->model = new Model_Register();
        $this->model->username = isset($_POST['username']) ? $_POST['username'] : null;
        $this->model->email = isset($_POST['email']) ? $_POST['email'] : null;
        $this->model->password = isset($_POST['password']) ? $_POST['password'] : null;
        $this->model->register();
        $this->view->generate('register_view.php', 'template_view.php', ['model' => $this->model]);

    }
}