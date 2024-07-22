<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'type',
        'file_name',
        'inner_data'
    ];

    /**
     * Retrieve a document by its unique document_name.
     *
     * @param string $documentName The unique name of the document.
     * @return Document|null The Document model instance if found, otherwise null.
     */
    public static function findByDocumentName($documentName)
    {
        return self::firstWhere('file_name', $documentName);
    }


}
