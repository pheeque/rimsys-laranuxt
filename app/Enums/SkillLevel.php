<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Beginner()
 * @method static static Intermediate()
 * @method static static Expert()
 */
final class SkillLevel extends Enum
{
    const Beginner =   0;
    const Intermediate =   1;
    const Expert = 2;

    public function toArray()
    {
        return $this->description;
    }
}
