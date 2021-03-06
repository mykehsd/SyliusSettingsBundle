<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SettingsBundle\Schema;

use Sylius\Bundle\SettingsBundle\Schema\Definition\DefinitionBuilderInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Settings schema interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface SchemaInterface
{
    /**
     * Build form.
     *
     * @param FormBuilderInterface $builder
     */
    public function build(FormBuilderInterface $builder);
}
