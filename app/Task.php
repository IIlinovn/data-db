<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        "id",
        "site",
        "link_page",
        "title",
        "anons",
        "category",
        "price_value",
        "price_type",
        "price_valuta",
        "maxprice",
        "date_in",
        "desc",
        "response",
        "view",
        //"tags",
        "safe",
        "success",
        "urgent",
        "feedback_plus",
        "feedback_minus",
        "finished",
        "in_work",
        "user_id",
        "user_login",
        "user_fio",
        "forAll",
        "isHidden",
        "isVacancy",
        "isBusiness",
        "total",
        "timeOut",
        "isSpecial",
        "isPremium",
        "forPlus",
        "budgetUpper",
    ];
}
