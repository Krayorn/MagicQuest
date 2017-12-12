<?php

/**
 * @Entity @Table(name="characterstat")
 **/
class CharacterStat
{
    /**
     * @var int
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Character", inversedBy="characterstats", cascade={"persist"})
     * @JoinColumn(name="character_id", referencedColumnName="id")
     */
    private $character;

    /**
     * @ManyToOne(targetEntity="Stat", inversedBy="characterstats", cascade={"persist"})
     * @JoinColumn(name="stat_id", referencedColumnName="id")
     */
    private $stat;

}

