<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`orders`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="smallint")
     */
    private $id;

    /**
     * @ORM\Column(name="customer_name", type="string", length=50)
     */
    private $customerName;

    /**
     * @ORM\Column(name="car_make", type="string", length=50)
     */
    private $carMake;

    /**
     * @ORM\Column(name="car_model", type="string", length=50)
     */
    private $carModel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(string $name): self
    {
        $this->customerName = $name;
        return $this;
    }

    public function getCarMake(): ?string
    {
        return $this->carMake;
    }

    public function setCarMake(string $make): self
    {
        $this->carMake = $make;
        return $this;
    }



    public function getCarModel(): ?string
    {
        return $this->getCarModel;
    }

    public function setCarModel(string $model): self
    {
        $this->carModel = $model;
        return $this;
    }
}
