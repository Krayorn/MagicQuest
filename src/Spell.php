<?php

/**
 * @Entity @Table(name="spell")
 **/
class Spell
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
     * @var \string
     *
     * @Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @OneToMany(targetEntity="SpellStat", mappedBy="spell", cascade={"persist"})
     */
    private $spellstats;

    /**
     * @OneToMany(targetEntity="CharacterSpell", mappedBy="spell", cascade={"persist"})
     */
    private $characterspells;

    /**
     * @OneToMany(targetEntity="MonsterSpell", mappedBy="spell", cascade={"persist"})
     */
    private $monsterspells;


}
