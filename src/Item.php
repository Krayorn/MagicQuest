<?php

/**
 * @Entity @Table(name="item")
 **/
class Item
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
     * @OneToMany(targetEntity="ItemStat", mappedBy="item", cascade={"persist"})
     */
    private $itemstats;

    /**
     * @OneToMany(targetEntity="CharacterInventory", mappedBy="item", cascade={"persist"})
     */
    private $characterinventories;

    /**
     * @OneToMany(targetEntity="MonsterInventory", mappedBy="item", cascade={"persist"})
     */
    private $monsterinventories;

}
