<?php

/**
 * @Entity @Table(name="characterspell")
 **/
class CharacterSpell
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
     * @ManyToOne(targetEntity="Character", inversedBy="characterspells", cascade={"persist"})
     * @JoinColumn(name="character_id", referencedColumnName="id")
     */
    private $character;

    /**
     * @ManyToOne(targetEntity="Spell", inversedBy="characterspells", cascade={"persist"})
     * @JoinColumn(name="spell_id", referencedColumnName="id")
     */
    private $spells;

}