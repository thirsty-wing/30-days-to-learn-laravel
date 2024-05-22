<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "salary" => '$50,000',
                "title" => "Director",
            ],
            [
                "id" => 2,
                "salary" => '$10,000',
                "title" => "Programmer",
            ],
            [
                "id" => 3,
                "salary" => '$40,000',
                "title" => "Teacher",
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job["id"] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
