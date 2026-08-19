<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer_details';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quotation_no',
        'name',
        'phone',
        'pincode',
        'email',
        'capacity',
        'yearly_savings',
        'roi',
        'savings_25yrs',
        'daily_generation',
        'yearly_generation',
        'co2_saving',
        'tree_equivalent',
        'panels',
        'subsidy',
        'project_cost',
        'landed_cost',
        'datetime'
    ];
}