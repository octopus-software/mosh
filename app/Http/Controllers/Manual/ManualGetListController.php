<?php

namespace App\Http\Controllers\Manual;

use App\Http\Controllers\Controller;
use App\Models\ManualGroup;
use Illuminate\Http\Request;

class ManualGetListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $manual_groups = ManualGroup::with(['manuals' => function ($query) {
            $query->orderBy('sort_number'); // ソート順
        }])->get();

        // データの整形
        $formatted_data = $manual_groups->map(function ($group) {
            return [
                'group_id' => $group->id,
                'name'     => $group->name,
                'manuals'  => $group->manuals->map(function ($manual) {
                    return [
                        'id'              => $manual->id,
                        'name'            => $manual->name,
                        'manual_file_url' => $manual->manual_file_url,
                        'sort_number'     => $manual->sort_number,
                    ];
                }),
            ];
        });

        return $formatted_data;
    }
}
