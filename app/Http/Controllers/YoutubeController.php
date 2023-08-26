<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google\Client;
use Google\Service\YouTube;

class YoutubeController extends Controller
{public function fetchVideos()
    {
        // $client = new Client();
        // $client->setApplicationName('Shakya Architects');
        // $client->setDeveloperKey('AIzaSyBCsezakharHFe2dJR13CEoDIS0Z1SLl2g
        // '); // Replace with your YouTube API key

        // $youtube = new YouTube($client);

        // // Get the channel ID of the desired YouTube channel
        // $channelId = 'UCWiaRA-nFBlBoa-NvnmGqww'; // Replace with the actual channel ID

        // // Fetch the uploads playlist ID of the channel
        // $channelsResponse = $youtube->channels->listChannels('contentDetails', ['id' => $channelId]);
        // $uploadsPlaylistId = $channelsResponse->items[0]->contentDetails->relatedPlaylists->uploads;

        // // Set parameters for the API request to fetch videos from the uploads playlist
        // $params = [
        //     'playlistId' => $uploadsPlaylistId,
        //     'maxResults' => 10, // Number of results
        // ];

        // // Perform the search using the playlistItems endpoint
        // $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', $params);

        // $data = [];
        // foreach ($playlistItemsResponse->items as $item) {
        //     $data[] = [
        //         'title' => $item->snippet->title,
        //         'videoId' => $item->snippet->resourceId->videoId,
        //     ];
        // }

        // return view('homee', ['data' => $data]);
       
            $client = new \Google_Client();
            $client->setApplicationName('Shakya Architects');
            $client->setDeveloperKey('AIzaSyBCsezakharHFe2dJR13CEoDIS0Z1SLl2g');
        
            $youtube = new \Google_Service_YouTube($client);
        
            // Get the channel ID of the desired YouTube channel
            $channelId = 'UCWiaRA-nFBlBoa-NvnmGqww'; // Replace with the actual channel ID
        
            // Fetch the uploads playlist ID of the channel
            $channelsResponse = $youtube->channels->listChannels('contentDetails', ['id' => $channelId]);
            $uploadsPlaylistId = $channelsResponse->items[0]->contentDetails->relatedPlaylists->uploads;
        
            // Set parameters for the API request to fetch videos from the uploads playlist
            $params = [
                'playlistId' => $uploadsPlaylistId,
                'maxResults' => 10, // Number of results
            ];
        
            // Fetch the playlist items response using the YouTube API
            $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', $params);
        
            $data = [];
            foreach ($playlistItemsResponse->items as $item) {
                $data[] = [
                    'title' => $item->snippet->title,
                    'videoId' => $item->snippet->resourceId->videoId,
                ];
            }
        
            return $data; // Return the video data
        }
        

}