<?php

namespace App\Entity;

use App\Repository\RosterTalentbuildRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: RosterTalentbuildRepository::class)]
#[Broadcast]
class RosterTalentbuild
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $member_id = null;

    #[ORM\Column(length: 10)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $build = null;

    #[ORM\Column]
    private ?int $tree = null;

    #[ORM\Column]
    private ?int $selected = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $spec = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $talent_loadout_code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getBuild(): ?int
    {
        return $this->build;
    }

    public function setBuild(int $build): static
    {
        $this->build = $build;

        return $this;
    }

    public function getTree(): ?int
    {
        return $this->tree;
    }

    public function setTree(int $tree): static
    {
        $this->tree = $tree;

        return $this;
    }

    public function getSelected(): ?int
    {
        return $this->selected;
    }

    public function setSelected(int $selected): static
    {
        $this->selected = $selected;

        return $this;
    }

    public function getSpec(): ?string
    {
        return $this->spec;
    }

    public function setSpec(string $spec): static
    {
        $this->spec = $spec;

        return $this;
    }

    public function getTalentLoadoutCode(): ?string
    {
        return $this->talent_loadout_code;
    }

    public function setTalentLoadoutCode(?string $talent_loadout_code): static
    {
        $this->talent_loadout_code = $talent_loadout_code;

        return $this;
    }
}
