<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.12.2016
 * Time: 17:28
 */

namespace App\Http\Controllers;


use App\Entities\Group;
use App\Entities\Lesson;
use App\Entities\Teacher;

class IndexController extends Controller
{
    public function getIndex()
    {
        return view("index");
    }
}