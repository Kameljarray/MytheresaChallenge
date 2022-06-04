<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Twig\Node\CheckToStringNode;

#[
    ApiResource(
        collectionOperations: ['get'],
        itemOperations: ['get'],
        paginationEnabled: true,
        paginationItemsPerPage: 5,
        paginationMaximumItemsPerPage: 5
    ),
    ApiFilter(SearchFilter::class, properties: ['category' => 'partial'])

]
#[ORM\Entity(repositoryClass: ProductRepository::class)]

class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $sku;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $category;

    #[ORM\Column(type: 'float')]
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPrice()
    {
        $discount = 0;
        if ($this->sku == "000003 ") $discount = 15;
        if ($this->category == "boots") $discount = 30;
        $priceArray = [
            "original" => $this->price,
            "final" => $this->price - $this->price * $discount / 100,
            "discount_percentage" => $discount > 0 ? strval($discount) . "%" : null,
            "currency" => "EUR"
        ];
        return $priceArray; //$this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}