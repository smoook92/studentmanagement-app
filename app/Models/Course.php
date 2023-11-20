<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'syllabus', 'duration'];
    use HasFactory;

    public function duration()
    {
        $months = $this->duration;
        $monthName = '';

        if ($months == 1) {
            $monthName = 'месяц';
        } elseif ($months >= 2 && $months <= 4) {
            $monthName = 'месяца';
        } else {
            $monthName = 'месяцев';
        }

        return $months . ' ' . $monthName;
    }
}
?>
