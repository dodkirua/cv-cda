<?php

namespace Model\Entity;

class Profil extends Entity implements Interfaces\EntityInterface{
    private ?string $address;
    private ?string $phone;

    public function __construct(int $id = null, string $address = null, string $phone = null)    {
        parent::__construct($id);
        $this->setAddress($address)
             ->setPhone($phone);
    }

    /**
     * get the Address
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * set the Address
     * @param string|null $address
     * @return Profil
     */
    public function setAddress(?string $address): Profil
    {
        $this->address = $address;
        return $this;
    }

    /**
     * get the Phone
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * set the Phone
     * @param string|null $phone
     * @return Profil
     */
    public function setPhone(?string $phone): Profil
    {
        $this->phone = $phone;
        return $this;
    }


    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['address'] = $this->getAddress();
        $array['phone']= $this->getPhone();
        return $array;
    }
}