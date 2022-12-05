<?php

namespace App\Http\Controllers\Api\skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\skill\SkillResource;
use App\Models\Skill;
use App\Services\SkillService;
use Illuminate\Http\Request;



class skillController extends Controller
{
    public function __construct(SkillService $skilled)
    {
        $this->service = $skilled;
    }
    //
    public function index(){
        // return response()->json('skill index');
        return SkillResource::collection(Skill::all());
    }

    public function show(Skill $skill){
        return new SkillResource($skill);
    }

    public function store(StoreSkillRequest $request){

        // Skill::create($request->validated());
        $data=$request->all();
        $status = $this->service->store($data);
        if ($status == 1){
            return response()->json('skill created');

        } else{
        return response()->json('skill not created');

        }
    }
    
    public function update(StoreSkillRequest $request, Skill $skill){
        
        $skill->update($request->validated());
        return response()->json('skill updated');

    }
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json('skill delete');

    }
}
