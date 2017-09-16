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
