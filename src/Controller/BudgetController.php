<?php

namespace App\Controller;

use App\Model\BudgetItem;
use Core\Json\Json;

class BudgetController
{
    function index()
    {
        return new Json(BudgetItem::all());
    }
}