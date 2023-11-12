<?php

declare(strict_types=1);

namespace App\Actions\Vocables;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class GetTrainableVocables
{
    public function execute(User $user): HasMany
    {
        return $user->vocables()
            ->select('*', DB::raw('datediff(now(), updated_at) as days_since_hit'))
            ->where('level', '<=', 7)
            ->where(DB::raw('datediff(now(), updated_at)'), '>', 0);
    }
}
