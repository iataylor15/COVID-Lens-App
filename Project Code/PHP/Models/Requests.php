<?php


/**
 * Description of Requests
 *
 * @author isaactaylor
 */
class Requests {

    private const ALLOWED_REQUESTS = array(0 => "USER_CREATION", 1 => "USER_SIGN_IN", 2 => "USER_SIGN_OUT", 3 => "USER_DATA_REQUEST"
        , 4 => "USER_SAVE", 5 => "ADMIN_SIGN_IN", 6 => "ADMIN_SIGN_OUT", 7 => "REPORT_CREATION",
        8 => "REPORTS_REQUEST", 9 => "REPORT_CONFIRMATION", 10 => "LOCATION_CREATION",
        11 => "LOCATION_UPDATE", 12 => "LOCATION_DELETION", 13 => "RESOURCE_UPDATE", 14 => "RESOURCE_CREATION",
        15 => "RESOURCES_REQUEST", 16 => "RESOURCE_DELETION", 17 => "ALERT_REQUEST", 18 => "ALERT_DELETION",
        19 => "ALERT_UPDATE", 20 => "ALERT_CREATION", 21 => "ADMIN_CREATION", 22 => "LOCATIONS_REQUEST"
        , 23 => "ALERT_READ_ALL", 24 => "LOCATIONS_READ_ALL", 25 => "REPORT_READ_ALL", 26 => "RESOURCE_READ_ALL"
        , 27 => "ADMIN_DELETION", 28 => "USER_DELETION");

    public function __construct() {
        
    }

    public static function getRequests() {
        return self::ALLOWED_REQUESTS;
    }

    public static function userCreationRequest() {
        return self::ALLOWED_REQUESTS[0];
    }

    public static function userSignInRequest() {
        return self::ALLOWED_REQUESTS[1];
    }

    public static function userSignOutRequest() {
        return self::ALLOWED_REQUESTS[2];
    }

    public static function userDataRequest() {
        return self::ALLOWED_REQUESTS[3];
    }

    public static function userSave() {
        return self::ALLOWED_REQUESTS[4];
    }

    public static function adminSignInRequest() {
        return self::ALLOWED_REQUESTS[5];
    }

    public static function adminSignOutRequest() {
        return self::ALLOWED_REQUESTS[6];
    }

    public static function reportCreationRequest() {
        return self::ALLOWED_REQUESTS[7];
    }

    public static function reportRequest() {
        return self::ALLOWED_REQUESTS[8];
    }

    public static function reportConfirmation() {
        return self::ALLOWED_REQUESTS[9];
    }

    public static function locationCreation() {
        return self::ALLOWED_REQUESTS[10];
    }

    public static function locationUpdate() {
        return self::ALLOWED_REQUESTS[11];
    }

    public static function locationDeletion() {
        return self::ALLOWED_REQUESTS[12];
    }

    public static function resourceUpdate() {
        return self::ALLOWED_REQUESTS[13];
    }

    public static function resourceCreation() {
        return self::ALLOWED_REQUESTS[14];
    }

    public static function resourceRequest() {
        return self::ALLOWED_REQUESTS[15];
    }

    public static function resourceDeletion() {
        return self::ALLOWED_REQUESTS[16];
    }

    public static function alertRequest() {
        return self::ALLOWED_REQUESTS[17];
    }

    public static function alertDeletion() {
        return self::ALLOWED_REQUESTS[18];
    }

    public static function alertUpdate() {
        return self::ALLOWED_REQUESTS[19];
    }

    public static function alertCreation() {
        return self::ALLOWED_REQUESTS[20];
    }

    public static function adminCreation() {
        return self::ALLOWED_REQUESTS[21];
    }

    public static function locationRequest() {
        return self::ALLOWED_REQUESTS[22];
    }

    public static function alertReadAll() {
        return self::ALLOWED_REQUESTS[23];
    }

    public static function locationsReadAll() {
        return self::ALLOWED_REQUESTS[24];
    }

    public static function reportReadAll() {
        return self::ALLOWED_REQUESTS[25];
    }

    public static function resourceReadAll() {
        return self::ALLOWED_REQUESTS[26];
    }

    public static function adminDeletion() {
        return self::ALLOWED_REQUESTS[27];
    }

    public static function userDeletion() {
        return self::ALLOWED_REQUESTS[28];
    }

}
