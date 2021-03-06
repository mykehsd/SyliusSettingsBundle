<?php

namespace spec\Sylius\Bundle\SettingsBundle\Model;

use PHPSpec2\ObjectBehavior;

/**
 * Settings parameter model spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Parameter extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\SettingsBundle\Model\Parameter');
    }

    function it_should_be_a_Sylius_settings_parameter()
    {
        $this->shouldImplement('Sylius\Bundle\SettingsBundle\Model\ParameterInterface');
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_should_not_have_namespace_by_default()
    {
        $this->getNamespace()->shouldReturn(null);
    }

    function its_namespace_should_be_mutable()
    {
        $this->setNamespace('general-settings');
        $this->getNamespace()->shouldReturn('general-settings');
    }

    function it_should_be_unnamed_by_default()
    {
        $this->getName()->shouldReturn(null);
    }

    function its_name_should_be_mutable()
    {
        $this->setName('siteTitle');
        $this->getName()->shouldReturn('siteTitle');
    }

    function it_should_not_have_value_by_default()
    {
        $this->getValue()->shouldReturn(null);
    }

    function its_value_should_be_mutable()
    {
        $this->setValue(true);
        $this->getValue()->shouldReturn(true);
    }

    function it_should_not_have_modification_date_by_default()
    {
        $this->getModifiedAt()->shouldReturn(null);
    }
}
