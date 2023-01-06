<?php

namespace App\DTO;

use App\Constants\SmartDeviceConstants;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

class SmartDeviceDTO
{
    public $id;

    #[Groups(['create', 'update'])]
    #[Assert\NotBlank(groups: ['create', 'update'])]
    #[Assert\Type('string', groups: ['create', 'update'])]
    public $name;

    #[Groups(['create', 'update'])]
    #[Assert\NotBlank(groups: ['create', 'update'])]
    #[Assert\Type('string', groups: ['create', 'update'])]
    #[Assert\Choice(SmartDeviceConstants::ALLOWED_DEVICE_TYPES,  groups: ['create', 'update'])]
    public $type;

    #[Groups(['create', 'update'])]
    #[Assert\NotBlank(groups: ['create', 'update'])]
    #[Assert\Type(type: ['boolean', 'float', 'integer'], groups: ['create', 'update'])]
    public $value;

    public $valueType;
}