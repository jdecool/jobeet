<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class Job
{
    /** @var int */
    private $id;

    /** @var Category */
    private $category;

    /** @var string */
    private $type;

    /** @var string */
    private $company;

    /** @var string */
    private $logo;

    /** @var string */
    private $url;

    /** @var string */
    private $position;

    /** @var string */
    private $location;

    /** @var string */
    private $description;

    /** @var string */
    private $howToApply;

    /** @var string */
    private $token;

    /** @var bool */
    private $isPublic;

    /** @var bool */
    private $isActivated;

    /** @var string */
    private $email;

    /** @var DateTime */
    private $expiresAt;

    /** @var DateTime */
    private $createdAt;

    /** @var DateTime */
    private $updatedAt;

    /**
     * Set createdAt
     *
     * @param LifecycleEventArgs $event
     * @return Job
     */
    public function setCreatedAtValue(LifecycleEventArgs $event): self
    {
        $this->createdAt = new DateTime();

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param LifecycleEventArgs $event
     * @return Job
     */
    public function setUpdatedAtValue(LifecycleEventArgs $event): self
    {
        $this->updatedAt = new DateTime();

        return $this;
    }
}
