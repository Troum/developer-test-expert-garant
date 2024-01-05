<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @class CDocumentCUser
 * @package App\Models
 * @property int $id
 * @property int $c_document_id
 * @property int $c_user_id
 */
class CDocumentCUser extends Pivot
{
    /**
     * @var string
     */
    protected $table = 'c_document_c_user';

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'c_document_id', 'c_user_id'
    ];


}
