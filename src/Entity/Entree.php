<?php

namespace App\Entity;

use App\Repository\EntreeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntreeRepository::class)]
class Entree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $quatite;

   

   
    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'entree')]
    #[ORM\JoinColumn(nullable: false)]
    private $product;


    #[ORM\Column(type: 'date')]
    private $dateE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuatite(): ?int
    {
        return $this->quatite;
    }

    public function setQuatite(int $quatite): self
    {
        $this->quatite = $quatite;

        return $this;
    }

    

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getProducts(): ?Product
    {
        return $this->products;
    }

    public function setProducts(?Product $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getDateE(): ?\DateTimeInterface
    {
        return $this->dateE;
    }

    public function setDateE(\DateTimeInterface $dateE): self
    {
        $this->dateE = $dateE;

        return $this;
    }
    
}
