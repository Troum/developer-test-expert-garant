<?php

namespace App\Jobs;

use App\Models\CDocument;
use App\Notifications\CDocumentUpdatedNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotifyCUsersOfCDocumentUpdate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var CDocument
     */
    protected CDocument $cDocument;

    /**
     * @param CDocument $cDocument
     */
    public function __construct(CDocument $cDocument)
    {
        $this->cDocument = $cDocument;
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        foreach ($this->cDocument->cUsers as $cUser) {
            $cUser->notify(new CDocumentUpdatedNotification());
        }
    }
}
