<?php

namespace Model\Entity;

class Language extends Entity implements Interfaces\EntityInterface{
    private ?string $name;
    private ?string $level;

    public function __construct(int $id = null, string $name = null, string $level = null)    {
        parent::__construct($id);
        $this->setName($name)
             ->setLevel($level);
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
     * @return Language
     */
    public function setName(?string $name): Language    {
        $this->name = $name;
        return $this;
    }

    /**
     * get the Level
     * @return string|null
     */
    public function getLevel(): ?string    {
        return $this->level;
    }

    /**
     * set the Level
     * @param string|null $level
     * @return Language
     */
    public function setLevel(?string $level): Language    {
        $this->level = $level;
        return $this;
    }


    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['name'] = $this->getName();
        $array['level'] = $this->getLevel();
        return $array;
    }
}