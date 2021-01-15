<?php

namespace Fruitware\LaravelSurveyJS\LaravelSurveyJS\Http\Controllers\API;

use Illuminate\Routing\Controller;
use Fruitware\LaravelSurveyJS\LaravelSurveyJS\Models\Survey;
use Fruitware\LaravelSurveyJS\LaravelSurveyJS\Http\Resources\SurveyResource;
use Fruitware\LaravelSurveyJS\LaravelSurveyJS\Http\Requests\CreateSurveyRequest;
use Fruitware\LaravelSurveyJS\LaravelSurveyJS\Http\Requests\UpdateSurveyRequest;

/**
 * Class SurveyAPIController
 *
 * @package Fruitware/LaravelSurveyJS
 */
class SurveyAPIController extends Controller
{
    public function index()
    {
        $surveys = Survey::latest()->paginate(config('survey-manager.pagination_perPage', 10));

        return SurveyResource::collection($surveys);
    }

    public function show($id)
    {
        $survey = Survey::find($id);

        if (is_null($survey)) {
            return response()->json('Survey not found', 404);
        }

        return response()->json([
            'data'      =>  new SurveyResource($survey),
            'message'   =>  'Survey successfully retrieved',
        ]);
    }

    public function store(CreateSurveyRequest $request)
    {
        $survey = Survey::create($request->all());

        return response()->json([
            'data'      =>  new SurveyResource($survey),
            'message'   =>  'Survey saved successfully',
        ], 201);
    }

    public function update($id, UpdateSurveyRequest $request)
    {
        $survey = Survey::find($id);

        if (is_null($survey)) {
            return response()->json('Survey not found', 404);
        }

        $survey->update($request->all());

        return response()->json([
            'data'      =>  new SurveyResource($survey),
            'message'   =>  'Survey successfully updated',
        ]);
    }

    public function destroy($id)
    {
        $survey = Survey::find($id);

        if (is_null($survey)) {
            return response()->json('Survey not found', 404);
        }
        $survey->delete();

        return response()->json([
            'data' => $id,
            'message' => 'Survey deleted successfully',
        ], 200);
    }
}
