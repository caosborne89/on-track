<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    protected $fillable = ['subject', 'description', 'assignee_id', 'author_id', 'project_id', 'status'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function statusDisplayVal()
    {
        $displayVal = '';

        switch($this->status) {
            case 'todo':
                return 'To Do';
                break;
            case 'doing':
                return 'Doing';
                break;
            case 'done':
                return 'Done';
                break;
            default:
                return "";
                break;
        }
    }
}
