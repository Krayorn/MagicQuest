<?php

/**
 * @Entity @Table(name="itemstat")
 **/
class ItemStat
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
     * @ManyToOne(targetEntity="Item", inversedBy="itemstats", cascade={"persist"})
     * @JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

    /**
     * @ManyToOne(targetEntity="Stat", inversedBy="itemstats", cascade={"persist"})
     * @JoinColumn(name="stat_id", referencedColumnName="id")
     */
    private $stat;

}

