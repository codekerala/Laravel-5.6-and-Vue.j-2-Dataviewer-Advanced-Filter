<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Dataviewer;

class Customer extends Model
{
    use Dataviewer;

    protected $allowedFilters = [
        'id' ,'name', 'company', 'email', 'group', 'total_revenue',
        'created_at',

        // nested
        'invoices.count', 'invoices.id', 'invoices.issue_date','invoices.due_date',
        'invoices.total', 'invoices.created_at'
    ];

    protected $orderable = [
        'id', 'name', 'company', 'email', 'group', 'total_revenue',
        'created_at'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
