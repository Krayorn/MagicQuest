<?php

/**
 * @Entity @Table(name="monster")
 **/
class Monster
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
     * @OneToMany(targetEntity="MonsterInventory", mappedBy="monster", cascade={"persist"})
     */
    private $monsterinventories;

    /**
     * @OneToMany(targetEntity="MonsterStat", mappedBy="monster", cascade={"persist"})
     */
    private $monsterstats;

    /**
     * @OneToMany(targetEntity="MonsterSpell", mappedBy="monster", cascade={"persist"})
     */
    private $monsterspells;

}
