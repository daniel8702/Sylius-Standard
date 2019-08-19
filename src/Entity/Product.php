<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

class Product extends BaseProduct
{
    /** @var string */
    private $color;

    /** @return string|null */
    public function getColor(): string
    {
        return $this->color;
    }
    /** @param string $color */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
