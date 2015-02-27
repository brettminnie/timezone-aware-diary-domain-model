<?php

namespace BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators;

/**
 * Interface HasIdentifiers
 * @package BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators
 */
interface HasIdentifiers
{
    const UUID_FORMAT = '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/';
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
