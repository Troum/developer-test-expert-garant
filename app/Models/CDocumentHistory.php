<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @class CDocumentHistory
 * @package App\Models
 * @property int $id
 * @property int $c_document_id
 * @property string $content
 * @property-read CDocument $cDocument
 */
class CDocumentHistory extends Model
{
    /**
     * @var string
     */
    protected $table = 'c_document_histories';

    /**
     * @var string[]
     */
    protected $fillable = [
      'c_document_id',
      'content'
    ];

    /**
     * @return BelongsTo
     */
    public function cDocument(): BelongsTo
    {
        return $this->belongsTo(CDocument::class);
    }
}
