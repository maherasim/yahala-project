<div class="vote-detail-modal">
    <div class="vote-header">
        <div class="vote-name">{{$vote->name}}</div>
        <div class="vote-category-name">{{$vote->voting_category->name}}</div>
    </div>
    <div class="p-2">
        <div class="community p-3">
            <div class="d-flex" style="color: #aaa">
                <div>Community</div>
                <div class="flex-fluid d-flex justify-content-end align-items-center">Total</div>
            </div>
            <div class="d-flex fw-bold" style="color: #333">
                <div>Reviews qualification</div>
                <div class="flex-fluid d-flex justify-content-end align-items-center total-reviews">{{$total_reviews}}</div>
            </div>
            <div class="vote-reaction dislike d-flex align-items-center mt-4" style="width:{{round($total_dislikes*100/$total_reviews)}}%">
                @if(isset($vote->options[0]['image']))
                <div>
                    <img src="/storage/{{$vote->options[0]['image']}}" style="height: 30px;" />
                </div>
                @endif
                <div class="flex-fluid d-flex justify-content-end align-items-center count">{{$total_dislikes}}</div>
            </div>
            <div class="vote-reaction noIdea d-flex align-items-center mt-2" style="width:{{round($total_neutrals*100/$total_reviews)}}%">
                @if(isset($vote->options[1]['image']))
                <div>
                    <img src="/storage/{{$vote->options[1]['image']}}" style="height: 30px;" />
                </div>
                @endif
                <div class="flex-fluid d-flex justify-content-end align-items-center count">{{$total_neutrals}}</div>
            </div>
            <div class="vote-reaction like d-flex align-items-center mt-2" style="width:{{round($total_likes*100/$total_reviews)}}%">
                @if(isset($vote->options[2]['image']))
                <div>
                    <img src="/storage/{{$vote->options[2]['image']}}" style="height: 30px;" />
                </div>
                @endif
                <div class="flex-fluid d-flex justify-content-end align-items-center count">{{$total_likes}}</div>
            </div>
        </div>

        <div class='statistic mt-4 p-3'>
            <div>Statistics</div>
            <div class="d-flex age-and-gender mt-2">
                <div style="color:#333;font-weight:bold;">Age and gender</div>
                <div class="flex-fluid d-flex justify-content-end align-items-center">
                    <div class="gender male">Male</div>
                    <div class="gender female ms-4">Female</div>
                </div>
            </div>
            @foreach($statistics as $index => $statistic)
            <div class="d-flex mt-3">
                <div class="me-2">{{$statistic['age']}}</div>
                <div class="flex-fluid d-flex justify-content-between align-items-center gap-3">
                    <div class="progress w-100" style="height:15px;">
                        <div 
                            class="progress-bar bg-primary" 
                            role="progressbar" 
                            style="width: {{$statistic['male']['reviews']*100/$statistic['max']}}%" 
                            aria-valuenow="{{$statistic['male']['reviews']}}" 
                            aria-valuemin="0" 
                            aria-valuemax="{{$statistic['max']}}">
                        </div>
                        <div 
                            class="progress-bar" 
                            role="progressbar" 
                            style="width: {{$statistic['female']['reviews']*100/$statistic['max']}}%; background: pink;" 
                            aria-valuenow="{{$statistic['female']['reviews']}}" 
                            aria-valuemin="0" 
                            aria-valuemax="{{$statistic['max']}}">
                        </div>
                    </div>
                    <small class="fw-semibold">{{number_format(($statistic['male']['reviews']+$statistic['female']['reviews'])*100/$statistic['max'], 1)}}%</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
