<?php

namespace Guess\Domain\Game;


use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Guess\Domain\League\League;
use Guess\Domain\Team\Team;


class Game
{
    private int $id;
    private string $score;
    private Team $homeTeam;
    private Team $awayTeam;
    private DateTimeInterface $gameTime;
    private ArrayCollection $guesses;
    private League $league;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        return $this->score;
    }

    /**
     * @param string $score
     */
    public function setScore(string $score): void
    {
        $this->score = $score;
    }

    /**
     * @return Team
     */
    public function getHomeTeam(): Team
    {
        return $this->homeTeam;
    }

    /**
     * @param Team $homeTeam
     */
    public function setHomeTeam(Team $homeTeam): void
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return Team
     */
    public function getAwayTeam(): Team
    {
        return $this->awayTeam;
    }

    /**
     * @param Team $awayTeam
     */
    public function setAwayTeam(Team $awayTeam): void
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return DateTimeInterface
     */
    public function getGameTime(): DateTimeInterface
    {
        return $this->gameTime;
    }

    /**
     * @param DateTimeInterface $gameTime
     */
    public function setGameTime(DateTimeInterface $gameTime): void
    {
        $this->gameTime = $gameTime;
    }

    /**
     * @return ArrayCollection
     */
    public function getGuesses(): ArrayCollection
    {
        return $this->guesses;
    }

    /**
     * @param ArrayCollection $guesses
     */
    public function setGuesses(ArrayCollection $guesses): void
    {
        $this->guesses = $guesses;
    }

    /**
     * @return League
     */
    public function getLeague(): League
    {
        return $this->league;
    }

    /**
     * @param League $league
     */
    public function setLeague(League $league): void
    {
        $this->league = $league;
    }
}