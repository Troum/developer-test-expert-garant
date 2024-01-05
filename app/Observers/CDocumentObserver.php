<?php

namespace App\Observers;

use App\Jobs\NotifyCUsersOfCDocumentUpdate;
use App\Models\CDocument;

class CDocumentObserver
{
    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function created(CDocument $cDocument): void
    {
        //
    }

    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function updating(CDocument $cDocument): void
    {
        $cDocument->cDocumentHistories->create([
           'content' => $cDocument->getOriginal('content')
        ]);
    }

    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function updated(CDocument $cDocument): void
    {
        NotifyCUsersOfCDocumentUpdate::dispatch($cDocument);
    }

    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function deleted(CDocument $cDocument): void
    {
        //
    }

    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function restored(CDocument $cDocument): void
    {
        //
    }

    /**
     * @param CDocument $cDocument
     * @return void
     */
    public function forceDeleted(CDocument $cDocument): void
    {
        //
    }
}
