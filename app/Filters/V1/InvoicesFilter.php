<?php 

namespace App\Filters\V1; 
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter {
   
   protected $safeParms = [
      'customerId' => ['eq'],
      'amount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
      'status' => ['eq'],
      'billedDate' => ['eq'],
      'paidDate' => ['eq'],
   ];

   protected $columnMap = [
      'customerId' => 'customer_id',
      'billedDate' => 'billed_date',
      'paidDate' => 'paid_date',
   ];

   protected $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '<=',
   ];

}






