<?php

namespace Model\Entity;

use Model\Entity\Interfaces\EntityInterface;
use Model\Entity\Entity;

class Competence extends Entity implements EntityInterface {
    private ?string $value;

    public function __construct(int $id = null, $value = null)    {
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
     * @return Competence
     */
    public function setValue( ?string $value): Competence    {
        $this->value = $value;
        return $this;
    }

    /**
     * return all the value of object
     * @return array
     */
    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['value'] = $this->getValue();
        return $array;
    }


}