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
    public function is_valid_phone(string $str): bool
    {
        $swissNumberStr = $str;
        $phoneUtil = PhoneNumberUtil::getInstance();
        return (bool) $phoneUtil->isValidNumber($phoneUtil->parse($swissNumberStr));
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
    public function valid_phone_country(string $str, string $country): bool
    {
        $swissNumberStr = $str;
        $phoneUtil = PhoneNumberUtil::getInstance();
        return (bool) $phoneUtil->isValidNumber($phoneUtil->parse($swissNumberStr, $country));
    }

}