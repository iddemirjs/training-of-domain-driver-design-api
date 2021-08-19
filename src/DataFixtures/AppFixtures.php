<?php

namespace Guess\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Guess\Domain\League\League;
use Guess\Domain\Player\Player;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;


class AppFixtures extends Fixture
{
    private PasswordHasherFactoryInterface $passwordHasher;

    public function __construct(PasswordHasherFactoryInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $league = new League();
        $league->setId(1);
        $league->setName("Premier League");
        $league->setLeagueNameSlugged("premier-league");
        $league->setLeagueApiId(123);
        $league->setLogo("premier-log.png");

        $manager->persist($league);

        $player = new Player();
        $player->setId(2);
        $player->setUsername("demir");
        $player->setEmail("demir@demir.com");

        $player->setPassword($this->passwordHasher->getPasswordHasher(Player::class)->hash("123123"));

        $manager->persist($player);

        $manager->flush();

    }
}
