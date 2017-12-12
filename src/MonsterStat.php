<?php

/**
 * @Entity @Table(name="monsterstat")
 **/
class MonsterStat
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
     * @ManyToOne(targetEntity="Monster", inversedBy="monsterstats", cascade={"persist"})
     * @JoinColumn(name="monster_id", referencedColumnName="id")
     */
    private $monster;

    /**
     * @ManyToOne(targetEntity="Stat", inversedBy="monsterstats", cascade={"persist"})
     * @JoinColumn(name="stat_id", referencedColumnName="id")
     */
    private $stat;

}

