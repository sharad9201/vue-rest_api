<?php

namespace App\Services;

use App\Models\Skill;

class SkillService
{
    public function index(){
       
    }

   

    public function store($data){

        Skill::create($data);
        return 1;
    }
    
   
}
