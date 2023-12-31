<?php
// src/Entity/RosterMember.php
namespace App\Entity;

use App\Repository\RosterMemberRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: RosterMemberRepository::class)]
#[ORM\Table(name: 'roster_members')]
#[Broadcast]

/**
 * @ORM\Entity
 * @ORM\Table(name="roster_members")
 */
class RosterMember
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $member_id = null;

    /**
     * @ORM\Column(type="integer", name="guild_id")
     */
    private ?int $guildId = null;

    /**
     * @ORM\Column(type="string", length=255, name="character_key_href")
     */
    private ?string $characterKeyHref = null;

    /**
     * @ORM\Column(type="string", length=75, name="character_name")
     */
    #[ORM\Column]
    private ?string $character_name = null;

    /**
     * @ORM\Column(type="string", length=75, name="charactername")
     */
    private ?string $charactername = null;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $name = null;

    /**
     * @ORM\Column(type="string", length=75)
     */
    #[ORM\Column]
    private ?string $server = null;

    /**
     * @ORM\Column(type="integer", name="character_id")
     */
    private ?int $characterId = null;

    /**
     * @ORM\Column(type="string", length=255, name="character_realm_key_href")
     */
    private ?string $characterRealmKeyHref = null;

    /**
     * @ORM\Column(type="integer", name="character_realm_id")
     */
    private ?int $characterRealmId = null;

    /**
     * @ORM\Column(type="string", length=100, name="character_realm_slug")
     */
    private ?string $characterRealmSlug = null;

    /**
     * @ORM\Column(type="integer", name="character_level")
     */
    private ?int $characterLevel = null;

    /**
     * @ORM\Column(type="string", length=255, name="character_playable_class_key_href")
     */
    private ?string $characterPlayableClassKeyHref = null;

    /**
     * @ORM\Column(type="integer", name="character_playable_class_id")
     */
    private ?int $characterPlayableClassId = null;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private ?string $class = null;

    /**
     * @ORM\Column(type="string", length=255, name="character_playable_race_key_href")
     */
    private ?string $characterPlayableRaceKeyHref = null;

    /**
     * @ORM\Column(type="integer", name="character_playable_race_id")
     */
    private ?int $characterPlayableRaceId = null;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private ?string $race = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $rank = null;

    /**
     * @ORM\Column(type="string", length=64, name="rank_title", nullable=true)
     */
    private ?string $rankTitle = null;

    /**
     * @ORM\Column(type="integer", name="last_online")
     */
    private ?int $lastOnline = null;

    /**
     * @ORM\Column(type="integer", name="last_http_code", nullable=true)
     */
    private ?int $lastHttpCode = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $active = null;

    /**
     * @ORM\Column(type="integer", name="account_id", nullable=true)
     */
    private ?int $accountId = null;

    // Getter methods

    public function getId(): ?int
    {
        return $this->member_id;
    }

    public function getMemberId(): ?int
    {
        return $this->member_id;
    }

    public function getGuildId(): ?int
    {
        return $this->guildId;
    }

    public function getCharacterKeyHref(): ?string
    {
        return $this->characterKeyHref;
    }

    public function getCharacterName(): ?string
    {
        return $this->character_name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getServer(): ?string
    {
        return $this->server;
    }

    public function getCharacterId(): ?int
    {
        return $this->characterId;
    }

    public function getCharacterRealmKeyHref(): ?string
    {
        return $this->characterRealmKeyHref;
    }

    public function getCharacterRealmId(): ?int
    {
        return $this->characterRealmId;
    }

    public function getCharacterRealmSlug(): ?string
    {
        return $this->characterRealmSlug;
    }

    public function getCharacterLevel(): ?int
    {
        return $this->characterLevel;
    }

    public function getCharacterPlayableClassKeyHref(): ?string
    {
        return $this->characterPlayableClassKeyHref;
    }

    public function getCharacterPlayableClassId(): ?int
    {
        return $this->characterPlayableClassId;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function getCharacterPlayableRaceKeyHref(): ?string
    {
        return $this->characterPlayableRaceKeyHref;
    }

    public function getCharacterPlayableRaceId(): ?int
    {
        return $this->characterPlayableRaceId;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function getRankTitle(): ?string
    {
        return $this->rankTitle;
    }

    public function getLastOnline(): ?int
    {
        return $this->lastOnline;
    }

    public function getLastHttpCode(): ?int
    {
        return $this->lastHttpCode;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    // Method to get all data as an array (for looping in the page)

    public function getAllData(): array
    {
        return [
            'id' => $this->member_id,
            'guildId' => $this->guildId,
            'characterKeyHref' => $this->characterKeyHref,
            'characterName' => $this->character_name,
            'name' => $this->name,
            'server' => $this->server,
            'characterId' => $this->characterId,
            'characterRealmKeyHref' => $this->characterRealmKeyHref,
            'characterRealmId' => $this->characterRealmId,
            'characterRealmSlug' => $this->characterRealmSlug,
            'characterLevel' => $this->characterLevel,
            'characterPlayableClassKeyHref' => $this->characterPlayableClassKeyHref,
            'characterPlayableClassId' => $this->characterPlayableClassId,
            'class' => $this->class,
            'characterPlayableRaceKeyHref' => $this->characterPlayableRaceKeyHref,
            'characterPlayableRaceId' => $this->characterPlayableRaceId,
            'race' => $this->race,
            'rank' => $this->rank,
            'rankTitle' => $this->rankTitle,
            'lastOnline' => $this->lastOnline,
            'lastHttpCode' => $this->lastHttpCode,
            'active' => $this->active,
            'accountId' => $this->accountId,
        ];
    }
}

?>