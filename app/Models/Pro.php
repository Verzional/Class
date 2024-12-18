<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'id' => "1",
            'title' => 'Calculator',
            'code' => 'cal',
            'course' => "Algorithm and Programming"
        ],
        [
            'id' => "2",
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => "Web Programming",
        ],
        [
            'id' => "3",
            'title' => 'Student Report',
            'code' => 'stu',
            'course' => "Web Programming",
        ]
    ];

    public static function allData()
    {
        return collect(self::$projects);
    }

    public static function dataWithCode($code)
    {
        $allProjects = static::allData();
        return $allProjects->firstWhere('code', $code);
    }
}
