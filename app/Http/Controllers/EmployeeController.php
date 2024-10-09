<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Поиск сотрудников
     */
    public function search(Request $request)
    {
        var_dump($request['text']);
        $text = $request['text'];
        $textArray = explode(',', $text);

        $models = Employee::where(function($query) use($request, $textArray) {
            $ids = [];

            foreach ($textArray as $key => $value) {
                if(is_numeric($value)) {
                    array_push($ids, intval($value));
                } else {
                    $preparedStr = trim('%' . $value . '%');

                    if ($key === 0) {
                        $query->where('name', 'like', $preparedStr);
                
                    } else {
                        $query->orWhere('name', 'like', $preparedStr);
                    }
                }
            }

            $query->orWhereIntegerInRaw('id', $ids);
        })->get();
        
        
        return response()->json($models);
    }
}
