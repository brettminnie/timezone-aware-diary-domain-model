<?php

namespace BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators;

/**
 * Interface HasIdentifiers
 * @package BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators
 */
interface HasIdentifiers
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return HasIdentifiers
     *
     * @throws \LogicException
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getUniqueIdentifier();

    /**
     * @param string $uniqueIdentifier
     * @return HasIdentifiers
     *
     *  @throws \LogicException
     */
    public function setUniqueIdentifier($uniqueIdentifier);

    /**
     * @return string
     */
    public static function generateUniqueIdentifier();

}
