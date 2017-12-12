<?php

/**
 * @Entity @Table(name="monsterinventory")
 **/
class MonsterInventory
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
     * @ManyToOne(targetEntity="Character", inversedBy="monsterinventories", cascade={"persist"})
     * @JoinColumn(name="monster_id", referencedColumnName="id")
     */
    private $character;

    /**
     * @ManyToOne(targetEntity="Item", inversedBy="monsterinventories", cascade={"persist"})
     * @JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

}

