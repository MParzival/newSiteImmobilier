<?php


namespace App\Entity;

use DateTime;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping as ORM;;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ActualityRepository")
 * Class Actuality
 * @package App\Entity
 */
class Actuality
{
    /**
     * @var integer
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="idActuality", type="integer")
     */
    private $idActuality;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     * @Assert\Length(max="100")
     */
    private $title;

    /**
     * @var TextType
     *
     * @ORM\Column(name="content", type="text")
     * @Assert\Length(min="100")
     * @Assert\NotBlank()
     */
    private $content;

    /**
     * @var TextType
     *
     * @ORM\Column(name="resume", type="text")
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="300")
     */
    private $resume;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    public function __construct()
    {
        $this->updated_at = new DateTime();
        $this->created_at = new DateTime();
    }

    /**
     * @return int
     */
    public function getIdActuality(): int
    {
        return $this->idActuality;
    }

    /**
     * @param int $idActuality
     * @return Actuality
     */
    public function setIdActuality(int $idActuality): Actuality
    {
        $this->idActuality = $idActuality;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Actuality
     */
    public function setTitle(string $title): Actuality
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return TextType
     */
    public function getContent(): TextType
    {
        return $this->content;
    }

    /**
     * @param TextType $content
     * @return Actuality
     */
    public function setContent(TextType $content): Actuality
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return TextType
     */
    public function getResume(): TextType
    {
        return $this->resume;
    }

    /**
     * @param TextType $resume
     * @return Actuality
     */
    public function setResume(TextType $resume): Actuality
    {
        $this->resume = $resume;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     * @return Actuality
     */
    public function setCreatedAt(DateTime $created_at): Actuality
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param DateTime $updated_at
     * @return Actuality
     */
    public function setUpdatedAt(DateTime $updated_at): Actuality
    {
        $this->updated_at = $updated_at;
        return $this;
    }



}