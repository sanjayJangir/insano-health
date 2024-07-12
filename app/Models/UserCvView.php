<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;

class UserCvView extends Model
{
    use HasFactory;
    protected $table = 'users_cv_views';
    protected $guarded = [];
    protected $appends = ['expired_date', 'view_date_time'];

    protected $casts = [
        'expired_date'     =>  'datetime',
        'view_date_time'     =>  'datetime',
    ];

    public function getViewDateTimeAttribute()
    {
        $view_date = $this->view_date;
        if ($view_date) {
            return date('M m, Y', strtotime($view_date));
        }
    }

    public function getExpiredDateAttribute()
    {
        $view_date = $this->view_date;
        $date = Carbon::parse($view_date)->addDays(30);
        if ($date) {
            return date('M m, Y', strtotime($date));
        }
    }

    public function usersdata()
    {
        return $this->hasOne(UserData::class, 'id','users_data_id')->orderby('id','desc');
    }

    public function candidate()
    {
        return $this->hasOne(Candidate::class, 'id','candidate_id')->orderby('id','desc');
    }


}
