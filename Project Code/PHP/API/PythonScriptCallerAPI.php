<?php

/**
 * Description of PythonScriptCallerAPI
 *
 * @author isaactaylor
 */
class PythonScriptCallerAPI {

    /**
     * This function gets the analyzed data from api
     * @param type $data - The data to analyze
     * @return string - the analyzed results as a serialized string 
     */
    public function getStats($data) {
        define("API", "python api url goes here");
        $ch = curl_init(API);
        // Setup request to send json via POST.
        $payload = json_encode(array("data" => $data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
