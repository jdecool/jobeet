<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

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
}
