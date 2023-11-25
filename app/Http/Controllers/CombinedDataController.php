<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\InteriorDesigning;
use App\Models\Architecture;
use App\Models\Team;
use App\Http\Controllers\YoutubeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CombinedDataController extends Controller
{
    public function showCombinedData()
    {
        $interiordesigning = InteriorDesigning::whereIn('id', [1, 2, 3])->get();
        $architecture = Architecture::whereIn('id', [1, 2, 3])->get();
        $team = Team::whereIn('id', [1, 2, 3,4,5,6])->get();
        $youtubeController = new YoutubeController();
        $youtubeData = $youtubeController->fetchVideos();
        return view('homeee', [
            'youtubeData' => $youtubeData,
            'architecture' => $architecture,           
            'interiordesigning' => $interiordesigning,
            'team'=>$team,
            
           
        ]);
    }

}
