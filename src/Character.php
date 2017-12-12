<?php

/**
 * @Entity @Table(name="character")
 **/
class Character
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
     * @OneToMany(targetEntity="CharacterInventory", mappedBy="character", cascade={"persist"})
     */
    private $characterinventories;

    /**
     * @OneToMany(targetEntity="CharacterStat", mappedBy="character", cascade={"persist"})
     */
    private $characterstats;

    /**
     * @OneToMany(targetEntity="CharacterSpell", mappedBy="character", cascade={"persist"})
     */
    private $characterspells;

    /**
     * @var \int
     *
     * @Column(name="position", type="integer")
     */
    private $position;


}
