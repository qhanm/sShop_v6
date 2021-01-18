<?php

namespace App\Jobs;

use App\Models\Accounts\UserSetting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SycnVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userSetting;
    /**
     * Create a new job instance.
     * @param UserSetting $userSetting
     * @return void
     */
    public function __construct(UserSetting $userSetting)
    {
        $this->userSetting = $userSetting;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
    }
}
