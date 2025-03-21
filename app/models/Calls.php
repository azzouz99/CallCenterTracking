<?php
namespace App\Models;

use Exception;

class Calls
{
    private $finesseUrl = "https://170.20.70.5:8445/finesse/api/Dialogs"; // Cisco Finesse API
    private $username = "admin"; // Replace with your Finesse username
    private $password = "password"; // Replace with your Finesse password

    /**
     * Fetch active calls from Cisco Finesse API (DO NOT STORE IN DB)
     */
    public function getCallsFromFinesse()
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->finesseUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (for testing)
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, "{$this->username}:{$this->password}");

            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                throw new Exception('Curl error: ' . curl_error($ch));
            }
            curl_close($ch);

            // Convert XML response to an array
            $finesseData = simplexml_load_string($response);
            $calls = [];

            if ($finesseData && isset($finesseData->Dialog)) {
                foreach ($finesseData->Dialog as $dialog) {
                    $calls[] = [
                        'call_id' => (string) $dialog->id,
                        'phone_number' => (string) $dialog->participants->participant->mediaAddress,
                        'call_type' => (string) $dialog->participants->participant->mediaAddressType,
                        'state' => (string) $dialog->state,
                        'date' => date("Y-m-d H:i:s"),
                    ];
                }
            }
            return $calls;

        } catch (Exception $e) {
            error_log("Finesse API error: " . $e->getMessage());
            return [];
        }
    }
}
?>
