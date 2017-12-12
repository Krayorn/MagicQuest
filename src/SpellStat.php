<?php

/**
 * @Entity @Table(name="spellstat")
 **/
class SpellStat
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
     * @ManyToOne(targetEntity="Spell", inversedBy="spellstats", cascade={"persist"})
     * @JoinColumn(name="spell_id", referencedColumnName="id")
     */
    private $spell;

    /**
     * @ManyToOne(targetEntity="Stat", inversedBy="spellstats", cascade={"persist"})
     * @JoinColumn(name="stat_id", referencedColumnName="id")
     */
    private $stat;

}

