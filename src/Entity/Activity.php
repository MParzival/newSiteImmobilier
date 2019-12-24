<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityRepository")
 *
 * Class Activity
 * @package App\Entity
 */

class Activity
{
    /**
     * @var integer
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="activity", type="integer")
     */
    private $idActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="name" ,type="string", length=50)
     */
    private $name;

    /**
     * @return int
     */
    public function getIdActivity(): int
    {
        return $this->idActivity;
    }

    /**
     * @param int $idActivity
     * @return Activity
     */
    public function setIdActivity(int $idActivity): Activity
    {
        $this->idActivity = $idActivity;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Activity
     */
    public function setName(string $name): Activity
    {
        $this->name = $name;
        return $this;
    }



}