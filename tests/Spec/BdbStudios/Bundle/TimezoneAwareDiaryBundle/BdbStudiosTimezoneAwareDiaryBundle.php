<?php

namespace Spec\BdbStudios\Bundle\TimezoneAwareDiaryBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class BdbStudiosTimezoneAwareDiaryBundleSpec
 * @package Spec\BdbStudios\Bundle\TimezoneAwareDiaryBundle
 */
class BdbStudiosTimezoneAwareDiaryBundleSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('BdbStudios\Bundle\TimezoneAwareDiaryBundle\BdbStudiosTimezoneAwareDiaryBundle');
    }
}
