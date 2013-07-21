<?php

namespace Meytip\StatsBundle\Entity;
use Meytip\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;


/**
 * Base user personal statistic
 * @ORM\Entity
 * @ORM\Table(name="statistic")
 *
 */
class Statistic {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Meytip\UserBundle\Entity\User", inversedBy="stats")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

}