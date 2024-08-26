<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Boosted
{
    public static function render(Request $request, string $viewName, array $bladeProps, string $componentName, array $vueProps = [])
    {
        // Check for 'boosted' header
        if ($request->header('boosted')) {
            return response()->json([
                'name' => $componentName,
                'props' => $vueProps,
            ], 200);
        }

        // Return the view if 'boosted' header is not present
        return view($viewName, $bladeProps);
    }
}
