<?php

declare(strict_types=1);

namespace AppBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

class CarBundle implements ResourceInterface
{
    /** @var int|null */
    private $id;

    /** @var string|null */
    private $model;

    /** @var string|null */
    private $brand;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->name;
    }

   public function setModel(?string $name): void
    {
        $this->name = $name;
    }

    public function getBrand(): ?string
    {
        return $this->code;
    }

    public function setBrand(?string $code): void
    {
        $this->code = $code;
    }
}