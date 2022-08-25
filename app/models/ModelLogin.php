<?php

namespace app\models;


class ModelLogin {

  protected $connect;

    private $id;
    private $email;
    private $passwrd;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of passwrd
     */ 
    public function getPasswrd()
    {
        return $this->passwrd;
    }

    /**
     * Set the value of passwrd
     *
     * @return  self
     */ 
    public function setPasswrd($passwrd)
    {
        $this->passwrd = $passwrd;

        return $this;
    }
}