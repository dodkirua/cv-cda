<?php

namespace Model\Entity;

class User extends Entity implements Interfaces\EntityInterface{
    private ?string $name;
    private ?string $mail;
    private ?string $password;

    public function __construct(int $id = null, string $name = null, string $mail = null, string $password = null)    {
        parent::__construct($id);
        $this->setName($name)
            ->setMail($mail)
            ->setPassword($password);
    }

    /**
     * get the Name
     * @return string|null
     */
    public function getName(): ?string    {
        return $this->name;
    }

    /**
     * set the Name
     * @param string|null $name
     * @return User
     */
    public function setName(?string $name): User    {
        $this->name = $name;
        return $this;
    }

    /**
     * get the Mail
     * @return string|null
     */
    public function getMail(): ?string    {
        return $this->mail;
    }

    /**
     * set the Mail
     * @param string|null $mail
     * @return User
     */
    public function setMail(?string $mail): User    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * get the Password
     * @return string|null
     */
    public function getPassword(): ?string    {
        return $this->password;
    }

    /**
     * set the Password
     * @param string|null $password
     * @return User
     */
    public function setPassword(?string $password): User    {
        $this->password = $password;
        return $this;
    }


    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['name'] = $this->getName();
        $array['mail'] = $this->getMail();
        $array['password'] = $this->getPassword();
        return $array;
    }
}