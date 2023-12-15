<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swh\SymfonyDebug\Console\Helper;

use Swh\SymfonyDebug\Console\Descriptor\JsonDescriptor;
use Swh\SymfonyDebug\Console\Descriptor\MarkdownDescriptor;
use Swh\SymfonyDebug\Console\Descriptor\TextDescriptor;
use Swh\SymfonyDebug\Console\Descriptor\XmlDescriptor;
use Symfony\Component\Console\Helper\DescriptorHelper as BaseDescriptorHelper;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 *
 * @see \Symfony\Bundle\FrameworkBundle\Console\Helper\DescriptorHelper
 *
 * @noinspection PhpUndefinedNamespaceInspection
 */
class DescriptorHelper extends BaseDescriptorHelper
{
    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct()
    {
        $this
            ->register('txt', new TextDescriptor())
            ->register('xml', new XmlDescriptor())
            ->register('json', new JsonDescriptor())
            ->register('md', new MarkdownDescriptor())
        ;
    }
}
