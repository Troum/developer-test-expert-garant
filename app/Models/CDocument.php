<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @class CDocument
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $content
 * @property-read CDocumentHistory $cDocumentHistories
 * @property-read CUser $cUsers
 */
class CDocument extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'c_documents';

    /**
     * @var string[]
     */
    protected $fillable = [
      'name', 'content'
    ];

    /**
     * @return HasMany
     */
    public function cDocumentHistories(): HasMany
    {
        return $this->hasMany(CDocumentHistory::class, 'c_document_id');
    }

    /**
     * The CUsers that belong to the document.
     */
    public function cUsers(): BelongsToMany
    {
        return $this->belongsToMany(CUser::class)->using(CDocumentCUser::class);
    }
}
