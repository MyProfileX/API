<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

   // Один счёт принадлежит только одному покупателю
    public function customer(){
      return $this->belongsTo(Customer::class);
    }
}
