<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class Affiliate
{
    /** @var int */
    private $id;

    /** @var Category[] */
    private $categories;

    /** @var string */
    private $url;

    /** @var string */
    private $email;

    /** @var string */
    private $token;

    /** @var bool */
    private $isActive;

    /** @var DateTime */
    private $createdAt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    /**
     * Get ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get categories
     *
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * Set categories
     *
     * @param array $categories
     * @return Affiliate
     */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get URL
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL
     *
     * @param string $url
     * @return Affiliate
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Affiliate
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Affiliate
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set isActive
     *
     * @param bool $isActive
     * @return Affiliate
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set createAt
     *
     * @param LifecycleEventArgs $event
     * @return Affiliate
     */
    public function setCreatedAtValue(LifecycleEventArgs $event): self
    {
        $this->createdAt = new DateTime();

        return $this;
    }
}
