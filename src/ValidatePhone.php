<?php

namespace Numlock;

use \libphonenumber\PhoneNumberUtil;

class ValidatePhone
{
    /**
     * @param string $str
     * @return bool
     * This function checks if the given string is a valid phone number. 
     * The phone number should be in the format +260xxxxxxxxx. 
     * Returns true if the phone number is valid and false if it is not.
     */
    public function is_valid_phone(string $phonenumber): bool
    {
        $swissNumberStr = $phonenumber;
        $phoneUtil = PhoneNumberUtil::getInstance();
        
        try {
            $swissNumberProto = $phoneUtil->parse($swissNumberStr);
            return $phoneUtil->isValidNumber($swissNumberProto);
        } catch (\libphonenumber\NumberParseException $e) {
            return false;
        }
    }

    /** 
     * @param string $str
     * @param string $country
     * @return bool
     * This function checks if the given string is a valid phone number for a specific country.
     * The country should be the 2-letter ISO country code. e.g. ZM for Zambia.
     * The phone number should be in the format +country_codexxxxxxxxx.
     * Returns true if the phone number is valid and false if it is not.
     */
    public function valid_phone_country(string $phonenumber, string $country): bool
    {
        $swissNumberStr = $phonenumber;
        $phoneUtil = PhoneNumberUtil::getInstance();
        
        try {
            $swissNumberProto = $phoneUtil->parse($swissNumberStr, $country);
            return $phoneUtil->isValidNumberForRegion($swissNumberProto, $country);
        } catch (\libphonenumber\NumberParseException $e) {
            return false;
        }
    }

}