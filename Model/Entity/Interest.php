<?php

namespace Model\Entity;

class Interest extends Entity implements Interfaces\EntityInterface{
    private ?string $value;

    public function __construct(int $id = null, ?string $value = null )    {
        parent::__construct($id);
        $this->value = $value;
    }

    /**
     * get the Value
     * @return string|null
     */
    public function getValue(): ?string    {
        return $this->value;
    }

    /**
     * set the Value
     * @param string|null $value
     * @return Interest
     */
    public function setValue(?string $value): Interest    {
        $this->value = $value;
        return $this;
    }



    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['value'] = $this->getValue();
        return $array;
    }
}