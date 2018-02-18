<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Category
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var Job[] */
    private $jobs;

    /** @var Affiliate[] */
    private $affiliates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
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
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get jobs
     *
     * @return array
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    /**
     * Get jobs
     *
     * @param array $jobs
     * @return Category
     */
    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }

    /**
     * Get affiliates
     *
     * @return Affiliate[]
     */
    public function getAffiliates(): Collection
    {
        return $this->affiliates;
    }

    /**
     * Set affiliates
     *
     * @param Affiliate[] $affiliates
     * @return Category
     */
    public function setAffiliates(array $affiliates): self
    {
        $this->affiliates = $affiliates;

        return $this;
    }
}
