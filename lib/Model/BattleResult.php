<?php

/**
 * Class BattleResult
 * Model class
 */
class BattleResult
{
    private $usedJediPowers;
    private $winningShip;
    private $loosingShip;

    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $loosingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->loosingShip = $loosingShip;
    }

    /**
     * @return boolean
     */
    public function getUsedJediPowers()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLoosingShip()
    {
        return $this->loosingShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }
}