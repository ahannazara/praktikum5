<?php

namespace App\Models;

use CodeIgniter\Model;

class Device extends Model
{
    private static $sample = [
        [
            "Id" => 1,
            "device_name" => "Philips Hue BR30",
            "device_brand" => "Philips",
            "device_quantity" => 5,
            "device_status" => "on"
        ],
        [
            "Id" => 2,
            "device_name" => "Philips Hue White 1600",
            "device_brand" => "Philips",
            "device_quantity" => 25,
            "device_status" => "off"
        ],
        [
            "Id" => 3,
            "device_name" => "Philips Hue Go",
            "device_brand" => "Philips",
            "device_quantity" => 2,
            "device_status" => "on"
        ],
        [
            "Id" => 4,
            "device_name" => "Philips Hue GU10 color",
            "device_brand" => "Philips",
            "device_quantity" => 16,
            "device_status" => "off"
        ]
     
        
    ];
    public function data()
    {
        return self::$sample;
    }
}
