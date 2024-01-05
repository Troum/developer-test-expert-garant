<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @class CUser
 * @package App\Models
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property-read CDocument $CDocuments
 */
class CUser extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
      'fullname', 'email'
    ];

    /**
     * The CDocuments that belong to the user.
     */
    public function cDocuments(): BelongsToMany
    {
        return $this->belongsToMany(CDocument::class)->using(CDocumentCUser::class);
    }
}
