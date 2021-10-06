<?php

namespace Model\Entity;

class Job extends Entity implements Interfaces\EntityInterface{
    private ?string $date_start;
    private ?string $date_end;
    private ?string $address;
    private ?string $enterprise;
    private ?string $job_name;

    public function __construct(int $id = null, ?string $date_start = null
        , ?string $date_end = null, ?string $address = null, ?string $enterprise = null
        , ?string $job_name = null)    {
        parent::__construct($id);
        $this->setDateStart($date_start)
             ->setDateEnd($date_end)
             ->setAddress($address)
             ->setEnterprise($enterprise)
             ->setJobName($job_name);
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
     * @return Job
     */
    public function setDateStart(?string $date_start): Job    {
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
     * @return Job
     */
    public function setDateEnd(?string $date_end): Job    {
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
     * @return Job
     */
    public function setAddress(?string $address): Job    {
        $this->address = $address;
        return $this;
    }

    /**
     * get the Enterprise
     * @return string|null
     */
    public function getEnterprise(): ?string    {
        return $this->enterprise;
    }

    /**
     * set the Enterprise
     * @param string|null $enterprise
     * @return Job
     */
    public function setEnterprise(?string $enterprise): Job    {
        $this->enterprise = $enterprise;
        return $this;
    }

    /**
     * get the JobName
     * @return string|null
     */
    public function getJobName(): ?string    {
        return $this->job_name;
    }

    /**
     * set the JobName
     * @param string|null $job_name
     * @return Job
     */
    public function setJobName(?string $job_name): Job    {
        $this->job_name = $job_name;
        return $this;
    }


    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['date_start'] = $this->getDateStart();
        $array['date_end'] = $this->getDateEnd();
        $array['address'] = $this->getAddress();
        $array['enterprise'] = $this->getEnterprise();
        $array['job_name'] = $this->getJobName();
        return $array;
    }
}