<?php

use PHPUnit\Framework\TestCase;
use Numlock\ValidatePhone;

class ValidatePhoneTest extends TestCase
{
    public function testIsValidPhone()
    {
        $validator = new ValidatePhone();

        $this->assertTrue($validator->is_valid_phone('+260971234567'));
        $this->assertFalse($validator->is_valid_phone('123-456-7890')); // wrong format
    }

    public function testValidPhoneCountry()
    {
        $validator = new ValidatePhone();

        $this->assertTrue($validator->valid_phone_country('+260971234567', 'ZM')); // Zambia
        $this->assertFalse($validator->valid_phone_country('+260971234567', 'US')); // wrong country
    }
}