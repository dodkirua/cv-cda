<?php

namespace Model\Entity;

class Formation extends Entity implements Interfaces\EntityInterface{
    private ?string $date_start;
    private ?string $date_end;
    private ?string $address;
    private ?string $organisation;
    private ?string $degree;

    /**
     * construct
     * @param int|null $id
     * @param string|null $date_start
     * @param string|null $date_end
     * @param string|null $address
     * @param string|null $organisation
     * @param string|null $degree
     */
    public function __construct(?int $id = null,?string $date_start = null,
                                ?string $date_end= null, ?string $address= null,
                                ?string $organisation= null, ?string $degree= null){
        parent::__construct($id);
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->address = $address;
        $this->organisation = $organisation;
        $this->degree = $degree;
    }

    /**
     * get the DateStart
     * @return string|null
     */
    public function getDateStart(): ?string    {
        return $this->date_start;
    }

    /**
     * set the DateStart
     * @param string|null $date_start
     * @return Formation
     */
    public function setDateStart(?string $date_start): Formation    {
        $this->date_start = $date_start;
        return $this;
    }

    /**
     * get the DateEnd
     * @return string|null
     */
    public function getDateEnd(): ?string    {
        return $this->date_end;
    }

    /**
     * set the DateEnd
     * @param string|null $date_end
     * @return Formation
     */
    public function setDateEnd(?string $date_end): Formation    {
        $this->date_end = $date_end;
        return $this;
    }

    /**
     * get the Address
     * @return string|null
     */
    public function getAddress(): ?string    {
        return $this->address;
    }

    /**
     * set the Address
     * @param string|null $address
     * @return Formation
     */
    public function setAddress(?string $address): Formation    {
        $this->address = $address;
        return $this;
    }

    /**
     * get the Organisation
     * @return string|null
     */
    public function getOrganisation(): ?string    {
        return $this->organisation;
    }

    /**
     * set the Organisation
     * @param string|null $organisation
     * @return Formation
     */
    public function setOrganisation(?string $organisation): Formation    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * get the Degree
     * @return string|null
     */
    public function getDegree(): ?string    {
        return $this->degree;
    }

    /**
     * set the Degree
     * @param string|null $degree
     * @return Formation
     */
    public function setDegree(?string $degree): Formation    {
        $this->degree = $degree;
        return $this;
    }


    /**
     * return all the value of object
     * @return array
     */
    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['date_start'] = $this->getDateStart();
        $array['date_end'] = $this->getDateEnd();
        $array['address'] = $this->getAddress();
        $array['organisation'] = $this->getOrganisation();
        $array['degree'] = $this->degree;
        return $array;
    }
}