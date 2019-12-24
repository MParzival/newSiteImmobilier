<?php


namespace App\Entity;


class GoodSearch
{
    /**
     * @var int
     */
    public $page;
    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @var int|null
     */
    private $minSurface;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var int|null
     */
    private $rentMax;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $activite;

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return GoodSearch
     */
    public function setMaxPrice(int $maxPrice): GoodSearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param int|null $minSurface
     * @return GoodSearch
     */
    public function setMinSurface(int $minSurface): GoodSearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return GoodSearch
     */
    public function setTitle(string $title): GoodSearch
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRentMax(): ?int
    {
        return $this->rentMax;
    }

    /**
     * @param int|null $rentMax
     * @return GoodSearch
     */
    public function setRentMax(int $rentMax): GoodSearch
    {
        $this->rentMax = $rentMax;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return GoodSearch
     */
    public function setPostalCode(string $postalCode): GoodSearch
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getActivite(): ?string
    {
        return $this->activite;
    }

    /**
     * @param string|null $activite
     * @return GoodSearch
     */
    public function setActivite(string $activite): GoodSearch
    {
        $this->activite = $activite;
        return $this;
    }



}