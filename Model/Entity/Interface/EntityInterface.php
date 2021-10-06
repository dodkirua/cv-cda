<?php
namespace Model\Entity\Interfaces;

interface EntityInterface{

    /**
     * return all the value of object
     * @return array
     */
    public function getAllData() :array;
}