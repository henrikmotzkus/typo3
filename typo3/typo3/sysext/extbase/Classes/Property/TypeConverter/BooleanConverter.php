<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Extbase\Property\TypeConverter;

use TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface;

/**
 * Converter which transforms simple types to a boolean, by simply casting it.
 */
class BooleanConverter extends AbstractTypeConverter
{
    /**
     * @var string[]
     */
    protected $sourceTypes = ['boolean', 'string'];

    /**
     * @var string
     */
    protected $targetType = 'boolean';

    /**
     * @var int
     */
    protected $priority = 10;

    /**
     * Actually convert from $source to $targetType
     *
     * @param string $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param \TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface $configuration
     * @return bool
     */
    public function convertFrom($source, string $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null): bool
    {
        return (bool)$source;
    }
}
