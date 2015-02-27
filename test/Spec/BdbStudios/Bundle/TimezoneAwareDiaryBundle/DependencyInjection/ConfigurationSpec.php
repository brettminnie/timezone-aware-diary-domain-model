<?php

namespace Spec\BdbStudios\Bundle\TimezoneAwareDiaryBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class ConfigurationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BdbStudios\Bundle\TimezoneAwareDiaryBundle\DependencyInjection\Configuration');
    }

    function it_should_get_config_tree_builder()
    {
        $this->getConfigTreeBuilder()
            ->shouldHaveType(new TreeBuilder());
    }

}
