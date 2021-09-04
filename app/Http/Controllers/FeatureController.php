<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Validations\FeaturesValidator;
use App\Services\FeatureAccessService;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    use FeaturesValidator;

    protected $service;

    public function __construct()
    {
        $this->service = new FeatureAccessService();
    }

    public function index(Request $request)
    {
        $this->validateRequest($request);
        $canAccess = $this->service->canAccess($request->input('email'), $request->input('featureName'));

        return response()->json(compact('canAccess'));
    }

    public function update(Request $request)
    {
        $this->validateRequest($request, [
            'enable' => 'required|boolean'
        ]);

        $result = $this->service->updateAccess(
            $request->input('email'),
            $request->input('featureName'),
            $request->input('enable')
        );

        return $result ? null : response()->make('',304);
    }

}
