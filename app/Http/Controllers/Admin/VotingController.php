<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostGallery;
use App\Models\Voting;
use App\Models\VotingCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votes = Voting::with('voting_category')->get();
        $vote_categories = VotingCategory::get();
        return view('content.voting.index' , compact('votes' , 'vote_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.voting.create' , compact('vote_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
          ]);

          $options = [];
          if ($request->{'reaction_option'}) {
            $options = array_map(function ($option) {
                $ret = ["title" => $option['title']];
                if(isset($option['image'])) $ret['image'] = $option['image'];
                return $ret;
            }, $request->{'reaction_option'});
          }

          $vote = new Voting();
          $vote->name = $request->name;
          $vote->category_id = $request->vote_category_id;
          $vote->options = $options;
          $vote->banner = $request->image ?? null;
          $vote->audio = $request->audio ?? null;
          $vote->vote_type = $request->vote_type ?? 'single';
          if($vote->save()){
            $id  = $vote->id;
            $post_gallery  = new PostGallery();
            $post_gallery->vote_id=$id;
            $post_gallery->media_type = 0;
            $post_gallery->media_url = url('/') .'/storage/'. $request->image;
            $post_gallery->user_id = $request->userId;
            if($request->has('post_id')){
                $post_gallery->post_id = $request->post_id;
            }
            if($request->has('news_id')){
                $post_gallery->news_id = $request->news_id;
            }
            if($request->has('history_id')){
                $post_gallery->history_id = $request->history_id;
            }
            $post_gallery->save();

            return redirect()->route('vote.index')->with('success', 'Vote Has been inserted');
        }else{
            return redirect()->route('vote.index')->with('error', 'Failed to add vote');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function show(Voting $voting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */

     public function statistic($id)
    {
        $vote = Voting::with('voting_category')->findOrFail($id);
        $statistics = [
            [
                'age' => '18-24',
                'max' => 150,
                'male' => [
                    'reviews' => 30,
                    'likes' => 15,
                    'neutrals' => 10,
                    'dislikes' => 5
                ],
                'female' => [
                    'reviews' => 27,
                    'likes' => 13,
                    'neutrals' => 8,
                    'dislikes' => 6
                ]
            ],
            [
                'age' => '25-30',
                'max' => 150,
                'male' => [
                    'reviews' => 50,
                    'likes' => 35,
                    'neutrals' => 10,
                    'dislikes' => 5
                ],
                'female' => [
                    'reviews' => 37,
                    'likes' => 20,
                    'neutrals' => 8,
                    'dislikes' => 9
                ]
            ],
            [
                'age' => '31-35',
                'max' => 150,
                'male' => [
                    'reviews' => 67,
                    'likes' => 40,
                    'neutrals' => 20,
                    'dislikes' => 7
                ],
                'female' => [
                    'reviews' => 27,
                    'likes' => 13,
                    'neutrals' => 8,
                    'dislikes' => 6
                ]
            ],
            [
                'age' => '36-40',
                'max' => 150,
                'male' => [
                    'reviews' => 30,
                    'likes' => 15,
                    'neutrals' => 10,
                    'dislikes' => 5
                ],
                'female' => [
                    'reviews' => 27,
                    'likes' => 13,
                    'neutrals' => 8,
                    'dislikes' => 6
                ]
            ]
        ];

        $total_reviews = 0;
        $total_likes = 0;
        $total_dislikes = 0;
        $total_neutrals = 0;
        foreach($statistics as $index => $statistic) {
            $total_reviews += $statistic['male']['reviews'] + $statistic['male']['reviews'];
            $total_likes += $statistic['male']['likes'] + $statistic['female']['likes'];
            $total_dislikes += $statistic['male']['dislikes'] + $statistic['female']['dislikes'];
            $total_neutrals += $statistic['male']['neutrals'] + $statistic['female']['neutrals'];
        }

        return view('content.include.voting.statistic', compact('vote', 'statistics', 'total_reviews', 'total_likes',
            'total_dislikes', 'total_neutrals'));
    }

    public function edit($id)
    {
        $vote = Voting::find($id);
        $vote_categories = VotingCategory::get();
        return view('content.include.voting.editForm', compact('vote', 'vote_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vote = Voting::find($id);
        $vote->name = $request->name;
        $vote->category_id = $request->vote_category_id;
        $vote->description = $request->description;

        $options = [];
        if ($request->{'reaction_option'}) {
          $options = array_map(function ($option) {
              $ret = ["title" => $option['title']];
              if(isset($option['image'])) $ret['image'] = $option['image'];
              return $ret;
          }, $request->{'reaction_option'});
        }
        $vote->options = $options;

        if($request->image) $vote->banner = $request->image;
        if($request->audio) $vote->audio = $request->audio;

        if($vote->update()){
            return redirect()->route('vote.index')->with('success', 'Vote Has been Updated');
        }else{
            return redirect()->route('vote.index')->with('error', 'Failed to update vote');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voting  $voting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Voting::find($id);
        if($vote->banner){
            $image_path = public_path('storage/'.$vote->banner);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
        }
        if($vote->delete($vote->id)){
            return redirect()->route('vote.index')->with('success', 'Vote Has been Delted');

        }else{
            return redirect()->route('vote.index')->with('success', 'Vote not deleted');

        }
    }

      public function status($id , $status){
        $vote = Voting::find($id);
        $vote->status = $status;
        if($vote->update()){
            return redirect()->route('vote.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('vote.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteImage($id)
    {
        $music = Voting::find($id);
        if ($music && isset($music->banner)) {
            $path = public_path('storage/' . $music->banner);
            if (file_exists($path)) {
                unlink($path);
            }

            // Remove the image filename from the model attribute
            $music->banner = null;
            $music->save();
        }

        return [
            'status' => true
        ];
    }
}
