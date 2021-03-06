<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Testtaxation\Component\Taxation\Model;

interface TaxableInterface
{
    public function getTaxCategory(): ?TaxCategoryInterface;
}
