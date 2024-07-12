<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Earning;
use App\Models\Setting;
use App\Models\UserPlan;
use App\Models\Candidate;
use Modules\Plan\Entities\Plan;
use Database\Seeders\CompanyBookmarks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Location\Entities\Country;

class BookmarkUser extends Model
{
    use HasFactory;

    protected $table = 'bookmark_user';

    protected $guarded = [];

    protected $fillable = [
        'CID',
        'UID',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'CID');
    }

}
