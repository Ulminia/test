<?php

namespace App\Entity;

use App\Repository\RosterMembersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: RosterMembersRepository::class)]
#[ORM\Table(name: 'roster_members')]
#[Broadcast]
class RosterMembers
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $member_id = null;

    #[ORM\Column(length: 4)]
    private ?string $region = null;

    #[ORM\Column]
    private ?int $guild_id = null;

    #[ORM\Column(length: 75)]
    private ?string $character_name = null;

    #[ORM\Column]
    private ?int $character_id = null;

    public function getId(): ?int
    {
        return $this->member_id;
    }

    public function getMemberId(): ?int
    {
        return $this->member_id;
    }

    public function setMemberId(int $member_id): static
    {
        $this->member_id = $member_id;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getGuildId(): ?int
    {
        return $this->guild_id;
    }

    public function setGuildId(int $guild_id): static
    {
        $this->guild_id = $guild_id;

        return $this;
    }

    public function getCharacterName(): ?string
    {
        return $this->character_name;
    }

    public function setCharacterName(string $character_name): static
    {
        $this->character_name = $character_name;

        return $this;
    }

    public function getCharacterId(): ?int
    {
        return $this->character_id;
    }

    public function setCharacterId(int $character_id): static
    {
        $this->character_id = $character_id;

        return $this;
    }
}
