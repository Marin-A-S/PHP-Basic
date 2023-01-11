<?php

class User {
    private string $username;
    private string $email;
    private bool $isActive = true;
    private ?int $age;
    private ?string $sex;
    private DateTime $dateOfUserCreation;

    function __construct(string $username)
    {
        $this->username = $username;
        $this->dateOfUserCreation = new DateTime();
    }
 
    function getUsername(): string
    {
        return $this->username ?? 'unknown user';
    }

    public function setAge(?int $age): void
    {
       if ($age == null) {
           $this->age = null;
       } elseif ($age > 0 && $age <= 125) {
           $this->age = $age;
       }
    }

    public function getAge(): ?int
    {
       return $this->age;
    }
 }