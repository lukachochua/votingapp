<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function ideas() {
        return $this->hasMany(Idea::class);
    }

    // public function getStatusClasses()
    // {
    //     if ($this->status->name === 'Open') {
    //         return 'bg-gray-200';
    //     } else if ($this->status->name === 'Considering') {
    //         return 'bg-purple text-white';
    //     } else if ($this->status->name === 'In Progress') {
    //         return 'bg-yellow text-white';
    //     } else if ($this->status->name === 'Implemented') {
    //         return 'bg-green text-white';
    //     } else if ($this->status->name === 'Closed') {
    //         return 'bg-red text-white';
    //     }

    //     return 'bg-gray-200';
    // }
}
