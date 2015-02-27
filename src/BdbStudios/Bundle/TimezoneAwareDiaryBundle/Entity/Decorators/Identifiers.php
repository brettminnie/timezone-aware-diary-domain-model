<?php

namespace BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators;

/**
 * Class Identifiers
 * @package BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators
 */
trait Identifiers
{
    /** @var  int */
    protected $id;

    /** @var  string */
    protected $uniqueId;

    /**
     * @param $id
     * @return HasIdentifiers
     *
     * @throws \LogicException
     */
    public function setId($id)
    {
        if (false === is_int($id)) {
            throw new \LogicException('An int was expected got ' . gettype($id));
        }

        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUniqueIdentifier()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueIdentifier
     * @return HasIdentifiers
     *
     *  @throws \LogicException
     */
    public function setUniqueIdentifier($uniqueIdentifier)
    {
        if (false === is_string($uniqueIdentifier)) {
            throw new \LogicException('A string was expected got ' . gettype($uniqueIdentifier));
        }

        $this->uniqueId = $uniqueIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public static function generateUniqueIdentifier()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0fff ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff )
        );
    }
}
