<?php

namespace App\Jobs;

use App\Mail\JoinTeamMail;
use App\Team;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class JoinTeam implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $team;
    private $sender;

    /**
     * @var int 尝试次数
     */
    public $tries = 5;

    public $timeout = 120;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Team $team, User $sender)
    {
        $this->team = $team;
        $this->sender = $sender;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = new JoinTeamMail($this->team, $this->sender);
        Mail::to($this->team)->send($mail);
    }


    public function failed(Exception $exception)
    {
        Log::debug($exception);
    }
}
