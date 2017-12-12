<?php

/**
 * @Entity @Table(name="monsterspell")
 **/
class MonsterSpell
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
     * @ManyToOne(targetEntity="Monster", inversedBy="monsterspells", cascade={"persist"})
     * @JoinColumn(name="monster_id", referencedColumnName="id")
     */
    private $monsters;

    /**
     * @ManyToOne(targetEntity="Spell", inversedBy="monsterspells", cascade={"persist"})
     * @JoinColumn(name="spell_id", referencedColumnName="id")
     */
    private $spells;

}