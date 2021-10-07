<?php

namespace Model\Entity;

class Task extends Entity implements Interfaces\EntityInterface{
    private ?string $value;

    public function __construct(int $id = null, string $value = null)    {
        parent::__construct($id);
        $this->setValue($value);
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
     * @return Task
     */
    public function setValue(?string $value): Task    {
        $this->value = $value;
        return $this;
    }

    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['value'] = $this->getValue();
        return $array;
    }
}