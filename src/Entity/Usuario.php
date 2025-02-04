<?php

namespace dwes\app\entity;

use dwes\app\entity\IEntity;

class Usuario implements IEntity
{
    private $id;
    private $username;
    private $password;
    private $role;
    private $avatar;

    public function __construct($username = "", $password = "", $role = "", $avatar="")
    {
        $this->id = null;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->avatar = $avatar;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'role' => $this->role,
            'avatar' => $this->avatar
        ];
    }
}