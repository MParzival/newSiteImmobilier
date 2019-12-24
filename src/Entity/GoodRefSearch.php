<?php


namespace App\Entity;


class GoodRefSearch
{
    /**
     * @var int|null
     */
    private $numero;

    /**
     * @return int|null
     */
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    /**
     * @param int|null $numero
     * @return GoodRefSearch
     */
    public function setNumero(int $numero): GoodRefSearch
    {
        $this->numero = $numero;
        return $this;
    }
}