<?php

/**
 * @Entity @Table(name="stat")
 **/
class Stat
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
     * @var string
     *
     * @Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \string
     *
     * @Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \int
     *
     * @Column(name="value", type="integer")
     */
    private $value;

    /**
     * @OneToMany(targetEntity="CharacterStat", mappedBy="stat", cascade={"persist"})
     */
    private $characterstats;

    /**
     * @OneToMany(targetEntity="MonsterStat", mappedBy="stat", cascade={"persist"})
     */
    private $monsterstats;

    /**
     * @OneToMany(targetEntity="ItemStat", mappedBy="stat", cascade={"persist"})
     */
    private $itemstats;

    /**
     * @OneToMany(targetEntity="SpellStat", mappedBy="stat", cascade={"persist"})
     */
    private $spellstats;

}
