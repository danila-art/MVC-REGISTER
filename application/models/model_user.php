<?php

class Model_Register extends Model
{
    public $username;
    public $email;
    public $password;
    public $errors = [];

    public function register()
    {

        if (empty($this->username)) {
            $this->errors['login'] = "Заполните поле Логин!";
        }
        if (empty($this->email)) {
            $this->errors['mail'] = "Заполните поле Почта!";
        }
        if (empty($this->password)) {
            $this->errors['password'] = "Заполните поле Пароль!";
        }
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
            $this->errors['email'] = "формат почтового ящика неправильный";
        }
        if (strlen($this->password) < 6 || strlen($this->password) > 20) {
            $this->errors['checkpass'] = "Поле пароль должно содержать от 6 до 20 знаков";
        }
        if (strlen($this->username) < 6 || strlen($this->username) > 20) {
            $this->errors['checklog'] = "Поле логин должно содержать от 6 до 20 знаков";
        }
        if (strlen($this->email) < 6 || strlen($this->email) > 64) {
            $this->errors['checkmail'] = "Поле мэйл должно содержать от 6 до 64 знаков";
        }
        $password = password_hash($this->password, PASSWORD_DEFAULT);

        if (!$this->errors) {
            $mysql = new mysqli('localhost', 'root', '', 'mvc_user');
            $mysql->query("INSERT INTO `user`(`username`,`mail`, `password`) VALUES ('$this->username','$this->email','$password')");
            $mysql->close();
        }

    }

}