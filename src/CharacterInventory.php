<?php

/**
 * @Entity @Table(name="characterinventory")
 **/
class CharacterInventory
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
     * @ManyToOne(targetEntity="Character", inversedBy="characterinventories", cascade={"persist"})
     * @JoinColumn(name="character_id", referencedColumnName="id")
     */
    private $character;

    /**
     * @ManyToOne(targetEntity="Item", inversedBy="characterinventories", cascade={"persist"})
     * @JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

}

