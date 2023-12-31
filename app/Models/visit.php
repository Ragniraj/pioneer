<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    
    /**
     * Get the instance of the user visits
     *
     * @return \Awssat\Visits\Visits
     */
    public function visitsCounter()
    {
        return visits($this);
    }

    /**
     * Get the visits relation
     * 
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function visits()
    {
        return visits($this)->relation();
    }
}

