<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="API сотрудников", version="0.1")
 */
class EmployeeController extends Controller
{
    /**
     * Поиск сотрудников.
     * @OA\Schema(
     *  schema="Request",
     *  title="Запрос поиска. Ведет поиск по полям id, name. Можно передавать множество значений через ,",
     * 	@OA\Property(
     * 		property="search",
     * 		type="string"
     * 	),
     * )
     * @OA\Post(
     * path="/employee/search",
     * @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(oneOf={
     *                 @OA\Schema(ref="#/components/schemas/Request"),
     *             },)
     *      ),
     *     @OA\Response(response="200", description="Поиск сотрудников")
     * )
     */
    public function search(Request $request)
    {
        $text = $request['text'];
        $textArray = explode(',', $text);

        $models = Employee::where(function($query) use($request, $textArray) {
            $ids = [];

            foreach ($textArray as $key => $value) {
                if(is_numeric($value)) {
                    array_push($ids, intval($value));
                } else {
                    if (mb_strlen($value) > 0) {
                        $preparedStr = trim('%' . $value . '%');

                        if ($key === 0) {
                            $query->where('name', 'like', $preparedStr);
                    
                        } else {
                            $query->orWhere('name', 'like', $preparedStr);
                        }
                    }
                }
            }

            $query->orWhereIntegerInRaw('id', $ids);
        })->get();
        
        return response()->json($models);
    }
}
