<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Illuminate\Support\Facades\Log;

class GoogleSheetsService
{
    private $client;
    private $sheetService;
    private $spreadsheetId = '1-9ZadAk5FMrkGYyK8GdUI6JXfd1zndlpdp1eVZq53iE'; // your Google Spreadsheet ID
    private $range = 'Sheet1'; // Sheet name or range

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(storage_path('app/google/credentials.json'));
        $this->client->addScope(Google_Service_Sheets::SPREADSHEETS);
        $this->client->setAccessType('offline');

        $this->sheetService = new Google_Service_Sheets($this->client);
    }

    public function appendToSheet($data)
    {
        $valueRange = new Google_Service_Sheets_ValueRange();
        $valueRange->setRange($this->range);
        $valueRange->setValues([$data]);

        try {
            $response = $this->sheetService->spreadsheets_values->append(
                $this->spreadsheetId,
                $this->range,
                $valueRange,
                ['valueInputOption' => 'RAW']
            );

            return $response;
        } catch (\Exception $e) {
            Log::error('Google Sheets API error: ' . $e->getMessage());
            return null;
        }
    }
}
