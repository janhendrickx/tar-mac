<?php
namespace modules\jobs;

use Craft;
use craft\queue\BaseJob;

class GoogleSheetsJob extends BaseJob
{
    public $data;
    public $webhookUrl;

    public function execute($queue): void
    {
        $client = Craft::createGuzzleClient();
        try {
            $client->post($this->webhookUrl, [
                'json' => $this->data,
                'timeout' => 10,
            ]);
        } catch (\Exception $e) {
            Craft::error('Google Sheets failed: ' . $e->getMessage(), __METHOD__);
        }
    }

    protected function defaultDescription(): string
    {
        return 'Data naar Google Sheets versturen';
    }
}