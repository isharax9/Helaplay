@extends('layouts.app')

@section('meta')
<meta name="description" content="MaruOi is novel reward platform in Sri Lanka, offering exciting services all in one place and allows win amazing gifts, MaruOi has got you covered. ">
<meta name="Free Reload" content="Are you tired of constantly running out of data or minutes on your phone? Look no further than Free Reload, the ultimate solution for all your mobile needs.">
<meta name="Sinhala and Tamil New Year" content="One of the most significant cultural events in Sri Lanka is the Sinhala and Tamil New Year, which is observed by both the Sinhalese and Tamil populations there. Mid-April sees the celebration of the new year with family, friends, and loved ones during this lively and colorful festival.">
<meta name="New Year Sri Lanka" content="As the year comes to a close, it's time to start looking forward to the new year and all the exciting possibilities it holds. And here in Sri Lanka, there's no better way to welcome the new year than with a range of vibrant and colorful celebrations.">
<meta name="Sinhala Subtitles" content="Sinhala subtitles are a useful tool for expanding your audience and raising content engagement. Even though they don't speak the language of the original content, they make it simpler for viewers to grasp the dialogue and the plot.">
<meta name="Free Online Money Sinhala" content="If you're looking for a way to make money online, there are many opportunities available for Sinhala speakers. From freelance writing and translation to online tutoring and e-commerce, there are countless ways to earn money from the comfort of your own home.">
<meta name="author" content="MaruOi">
<meta name="keywords" content="MaruOi">
@endsection

@section('title')
<title>{{ config('app.name', 'MaruOi') }} | Play Games, Win Reloads</title>
@endsection

@section('content')
 <div class="container p-0 p-md-5 border">
      <div class="row d-flex flex-column flex-md-row justify-content-center text-center border  ">
            <div class="col col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center text-center overflow-hidden">
               <div class="embed-responsive embed-responsive-16by9 overflow-hidden">
                 
              <iframe id="game-iframe"  class="iframe embed-responsive-item" src="https://lovely-nougat-0e9d0f.netlify.app/{{$gameNum}}"></iframe>        
               </div>
            </div>
    
            <div class="col col-lg-4 col-md-12 col-sm-12 border">
             <table class="table table-striped">
                 <thead>
                     <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                     </tr>
                 </thead>
                   <tbody id="leaderboard">
                      <!-- Leaderboard data will be added dynamically here -->
                   </tbody>
             </table>
            </div>
          
      </div>

          
   </div> <!-- grid ends --> 
   <!-- popup model --> 
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Want to enter to leader board ?</h5>
        <button type="button" class="close-model" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       You can enter to the leader board by registering ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger close-model" data-dismiss="modal">Close</button>
       <a href="/register" id="register-link" class="btn btn-secondary">Register</a>
      </div>
    </div>
  </div>
</div>
<!-- end poup -->

            <div>
              <img height="100px" src="{{asset("theme/multi_kart/assets/images/blog/1.jpg")}}" alt="" class="bg-img blur-up lazyload">
            </div>
            <div id="game-num" class="d-none">
             {{  $gameNum  }}
            </div>
             <div id="user-id" class="d-none">
             {{  $userId  }}
            </div>
   </div> 



@endsection

   @section('scripts')
    <script type="text/javascript" src="{{ asset('games/js/game-window.js') }}"></script>
@endsection