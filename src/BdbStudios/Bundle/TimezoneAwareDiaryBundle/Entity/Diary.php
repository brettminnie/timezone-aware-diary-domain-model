<?php

namespace BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity;

use BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators\HasIdentifiers;
use BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity\Decorators\Identifiers;

/**
 * Class Diary
 * @package BdbStudios\Bundle\TimezoneAwareDiaryBundle\Entity
 */
class Diary implements HasIdentifiers
{
    use Identifiers;
}
