<?php

namespace App\Events\Twitter;

use App\Events\DashboardEvent;
use Illuminate\Support\Facades\Log;

class Mentioned extends DashboardEvent
{
    /** @var array */
    public $tweetProperties;

    public function __construct(array $tweetProperties)
    {
        $this->tweetProperties = $tweetProperties;
    }

    public function broadcastWhen()
    {
        Log::info('Tweet Properties', $this->tweetProperties);
        return $this->tweetProperties;
    }
}
