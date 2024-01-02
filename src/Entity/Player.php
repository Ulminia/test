<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $member_id = null;

    #[ORM\Column(length: 5)]
    private ?string $region = null;

    #[ORM\Column(length: 50)]
    private ?string $character_name = null;

    #[ORM\Column(length: 50)]
    private ?string $character_relam_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $character_realm_id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $character_realm_name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $character_realm_slug = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $assets_0_key = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $assets_1_key = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $assets_2_key = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $assets_3_key = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $assets_1_value = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $assets_0_value = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $assets_2_value = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $assets_3_value = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name_search = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $gender_type = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $gender_name = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $faction_type = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $faction_name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $race_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $race_id = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $character_class_name = null;

    #[ORM\Column]
    private ?int $character_class_id = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $active_spec_name = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $realm_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $realm_id = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $realm_slug = null;

    #[ORM\Column(nullable: true)]
    private ?int $level = null;

    #[ORM\Column(nullable: true)]
    private ?int $experience = null;

    #[ORM\Column(nullable: true)]
    private ?int $achievement_points = null;

    #[ORM\Column(nullable: true)]
    private ?int $last_login_timestamp = null;

    #[ORM\Column(nullable: true)]
    private ?int $average_item_level = null;

    #[ORM\Column(nullable: true)]
    private ?int $equipped_item_level = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $active_title_name = null;

    #[ORM\Column(nullable: true)]
    private ?int $active_title_id = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $active_title_display_string = null;

    #[ORM\Column(nullable: true)]
    private ?int $last_update = null;

    #[ORM\Column(nullable: true)]
    private ?int $cron_update = null;

    #[ORM\Column(nullable: true)]
    private ?int $active_spec_id = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $health = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCharacterName(): ?string
    {
        return $this->character_name;
    }

    public function setCharacterName(string $character_name): static
    {
        $this->character_name = $character_name;

        return $this;
    }

    public function getCharacterRelamName(): ?string
    {
        return $this->character_relam_name;
    }

    public function setCharacterRelamName(string $character_relam_name): static
    {
        $this->character_relam_name = $character_relam_name;

        return $this;
    }

    public function getCharacterRealmId(): ?int
    {
        return $this->character_realm_id;
    }

    public function setCharacterRealmId(?int $character_realm_id): static
    {
        $this->character_realm_id = $character_realm_id;

        return $this;
    }

    public function getCharacterRealmName(): ?string
    {
        return $this->character_realm_name;
    }

    public function setCharacterRealmName(?string $character_realm_name): static
    {
        $this->character_realm_name = $character_realm_name;

        return $this;
    }

    public function getCharacterRealmSlug(): ?string
    {
        return $this->character_realm_slug;
    }

    public function setCharacterRealmSlug(?string $character_realm_slug): static
    {
        $this->character_realm_slug = $character_realm_slug;

        return $this;
    }

    public function getAssets0Key(): ?string
    {
        return $this->assets_0_key;
    }

    public function setAssets0Key(?string $assets_0_key): static
    {
        $this->assets_0_key = $assets_0_key;

        return $this;
    }

    public function getAssets1Key(): ?string
    {
        return $this->assets_1_key;
    }

    public function setAssets1Key(?string $assets_1_key): static
    {
        $this->assets_1_key = $assets_1_key;

        return $this;
    }

    public function getAssets2Key(): ?string
    {
        return $this->assets_2_key;
    }

    public function setAssets2Key(?string $assets_2_key): static
    {
        $this->assets_2_key = $assets_2_key;

        return $this;
    }

    public function getAssets3Key(): ?string
    {
        return $this->assets_3_key;
    }

    public function setAssets3Key(?string $assets_3_key): static
    {
        $this->assets_3_key = $assets_3_key;

        return $this;
    }

    public function getAssets1Value(): ?string
    {
        return $this->assets_1_value;
    }

    public function setAssets1Value(?string $assets_1_value): static
    {
        $this->assets_1_value = $assets_1_value;

        return $this;
    }

    public function getAssets0Value(): ?string
    {
        return $this->assets_0_value;
    }

    public function setAssets0Value(?string $assets_0_value): static
    {
        $this->assets_0_value = $assets_0_value;

        return $this;
    }

    public function getAssets2Value(): ?string
    {
        return $this->assets_2_value;
    }

    public function setAssets2Value(?string $assets_2_value): static
    {
        $this->assets_2_value = $assets_2_value;

        return $this;
    }

    public function getAssets3Value(): ?string
    {
        return $this->assets_3_value;
    }

    public function setAssets3Value(?string $assets_3_value): static
    {
        $this->assets_3_value = $assets_3_value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getNameSearch(): ?string
    {
        return $this->name_search;
    }

    public function setNameSearch(?string $name_search): static
    {
        $this->name_search = $name_search;

        return $this;
    }

    public function getGenderType(): ?string
    {
        return $this->gender_type;
    }

    public function setGenderType(?string $gender_type): static
    {
        $this->gender_type = $gender_type;

        return $this;
    }

    public function getGenderName(): ?string
    {
        return $this->gender_name;
    }

    public function setGenderName(?string $gender_name): static
    {
        $this->gender_name = $gender_name;

        return $this;
    }

    public function getFactionType(): ?string
    {
        return $this->faction_type;
    }

    public function setFactionType(?string $faction_type): static
    {
        $this->faction_type = $faction_type;

        return $this;
    }

    public function getFactionName(): ?string
    {
        return $this->faction_name;
    }

    public function setFactionName(?string $faction_name): static
    {
        $this->faction_name = $faction_name;

        return $this;
    }

    public function getRaceName(): ?string
    {
        return $this->race_name;
    }

    public function setRaceName(?string $race_name): static
    {
        $this->race_name = $race_name;

        return $this;
    }

    public function getRaceId(): ?int
    {
        return $this->race_id;
    }

    public function setRaceId(?int $race_id): static
    {
        $this->race_id = $race_id;

        return $this;
    }

    public function getCharacterClassName(): ?string
    {
        return $this->character_class_name;
    }

    public function setCharacterClassName(?string $character_class_name): static
    {
        $this->character_class_name = $character_class_name;

        return $this;
    }

    public function getCharacterClassId(): ?int
    {
        return $this->character_class_id;
    }

    public function setCharacterClassId(int $character_class_id): static
    {
        $this->character_class_id = $character_class_id;

        return $this;
    }

    public function getActiveSpecName(): ?string
    {
        return $this->active_spec_name;
    }

    public function setActiveSpecName(?string $active_spec_name): static
    {
        $this->active_spec_name = $active_spec_name;

        return $this;
    }

    public function getRealmName(): ?string
    {
        return $this->realm_name;
    }

    public function setRealmName(?string $realm_name): static
    {
        $this->realm_name = $realm_name;

        return $this;
    }

    public function getRealmId(): ?int
    {
        return $this->realm_id;
    }

    public function setRealmId(?int $realm_id): static
    {
        $this->realm_id = $realm_id;

        return $this;
    }

    public function getRealmSlug(): ?string
    {
        return $this->realm_slug;
    }

    public function setRealmSlug(?string $realm_slug): static
    {
        $this->realm_slug = $realm_slug;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getAchievementPoints(): ?int
    {
        return $this->achievement_points;
    }

    public function setAchievementPoints(?int $achievement_points): static
    {
        $this->achievement_points = $achievement_points;

        return $this;
    }

    public function getLastLoginTimestamp(): ?int
    {
        return $this->last_login_timestamp;
    }

    public function setLastLoginTimestamp(?int $last_login_timestamp): static
    {
        $this->last_login_timestamp = $last_login_timestamp;

        return $this;
    }

    public function getAverageItemLevel(): ?int
    {
        return $this->average_item_level;
    }

    public function setAverageItemLevel(?int $average_item_level): static
    {
        $this->average_item_level = $average_item_level;

        return $this;
    }

    public function getEquippedItemLevel(): ?int
    {
        return $this->equipped_item_level;
    }

    public function setEquippedItemLevel(?int $equipped_item_level): static
    {
        $this->equipped_item_level = $equipped_item_level;

        return $this;
    }

    public function getActiveTitleName(): ?string
    {
        return $this->active_title_name;
    }

    public function setActiveTitleName(?string $active_title_name): static
    {
        $this->active_title_name = $active_title_name;

        return $this;
    }

    public function getActiveTitleId(): ?int
    {
        return $this->active_title_id;
    }

    public function setActiveTitleId(?int $active_title_id): static
    {
        $this->active_title_id = $active_title_id;

        return $this;
    }

    public function getActiveTitleDisplayString(): ?string
    {
        return $this->active_title_display_string;
    }

    public function setActiveTitleDisplayString(?string $active_title_display_string): static
    {
        $this->active_title_display_string = $active_title_display_string;

        return $this;
    }

    public function getLastUpdate(): ?int
    {
        return $this->last_update;
    }

    public function setLastUpdate(?int $last_update): static
    {
        $this->last_update = $last_update;

        return $this;
    }

    public function getCronUpdate(): ?int
    {
        return $this->cron_update;
    }

    public function setCronUpdate(?int $cron_update): static
    {
        $this->cron_update = $cron_update;

        return $this;
    }

    public function getActiveSpecId(): ?int
    {
        return $this->active_spec_id;
    }

    public function setActiveSpecId(?int $active_spec_id): static
    {
        $this->active_spec_id = $active_spec_id;

        return $this;
    }

    public function getHealth(): ?string
    {
        return $this->health;
    }

    public function setHealth(?string $health): static
    {
        $this->health = $health;

        return $this;
    }
}
