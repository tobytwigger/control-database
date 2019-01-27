<?php

namespace App\Events;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Support\Facades\Log;

class StudentRemovedFromGroup
{
    use Dispatchable, SerializesModels;

    public $student;

    public $group;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Student $student, Group $group)
    {
        Log::warning('Remove this functionality Toby!');
        $this->student = $student;
        $this->group = $group;
    }
}
