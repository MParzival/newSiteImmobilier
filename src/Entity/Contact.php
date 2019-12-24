<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact{

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="100")
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="100")
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/[0-9]{10}/"
     * )
     */
    private $phone;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="10")
     */
    private $content;

    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    private $subject;

    /**
     * @var Goods|null
     */
    private $good;

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     * @return Contact
     */
    public function setFirstname(?string $firstname): Contact
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     * @return Contact
     */
    public function setLastname(?string $lastname): Contact
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Contact
     */
    public function setPhone(?string $phone): Contact
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Contact
     */
    public function setEmail(?string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return Contact
     */
    public function setContent(?string $content): Contact
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Goods|null
     */
    public function getGood(): ?Goods
    {
        return $this->good;
    }

    /**
     * @param Goods|null $good
     * @return Contact
     */
    public function setGood(?Goods $good): Contact
    {
        $this->good = $good;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return Contact
     */
    public function setSubject(?string $subject): Contact
    {
        $this->subject = $subject;
        return $this;
    }





}