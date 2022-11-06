<?php
class User {
    public $id;
    public $email;
    public $password;
    public $name;
    public $token;
}

interface UserDao {

    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);

}