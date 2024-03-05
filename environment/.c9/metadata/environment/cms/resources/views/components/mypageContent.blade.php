{"filter":false,"title":"mypageContent.blade.php","tooltip":"/cms/resources/views/components/mypageContent.blade.php","undoManager":{"mark":34,"position":34,"stack":[[{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-8\">","                <div class=\"card\">","                    <div class=\"card-header\">{{ __('My Profile') }}</div>","","                    <div class=\"card-body\">","                        <img src=\"{{ asset(auth()->user()->uinfo->profile_picture) }}\" alt=\"Profile Picture\">","                        <p>Name: {{ auth()->user()->uinfo->profile_name }}</p>","                        <p>Age: {{ auth()->user()->uinfo->profile_age }}</p>","                        <p>Introduction: {{ auth()->user()->uinfo->profile_intro }}</p>","                        <p>Interest Industry 1: {{ auth()->user()->interests[0]->interest_industry1 }}</p>","                        <p>Interest Industry 2: {{ auth()->user()->interests[0]->interest_industry2 }}</p>","                        <p>Interest Industry 3: {{ auth()->user()->interests[0]->interest_industry3 }}</p>","                        <p>Interest Function 1: {{ auth()->user()->interests[0]->interest_function1 }}</p>","                        <p>Interest Function 2: {{ auth()->user()->interests[0]->interest_function2 }}</p>","                        <p>Interest Function 3: {{ auth()->user()->interests[0]->interest_function3 }}</p>","                        <p>Company: {{ auth()->user()->careers[0]->career_company }}</p>","                        <p>Joined: {{ auth()->user()->careers[0]->career_work_from }}</p>","                        <p>Left: {{ auth()->user()->careers[0]->career_work_to }}</p>","                        <p>Career Industry: {{ auth()->user()->careers[0]->career_industry }}</p>","                        <p>Career Function: {{ auth()->user()->careers[0]->career_function }}</p>","                        <p>Position: {{ auth()->user()->careers[0]->career_position }}</p>","                    </div>","                </div>","            </div>","        </div>","    </div>","@endsection",""],"id":1}],[{"start":{"row":31,"column":0},"end":{"row":32,"column":0},"action":"remove","lines":["@endsection",""],"id":2},{"start":{"row":30,"column":10},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":19},"action":"remove","lines":["@extends('layouts.app')","","@section('content')"],"id":3},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":4},"action":"remove","lines":["    "],"id":4},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"remove","lines":["    "]},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"remove","lines":["    "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"remove","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["h"],"id":6},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["t"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["m"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["l"]}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":8},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":8},"action":"remove","lines":["    "],"id":8},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"remove","lines":["l"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["m"]},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["t"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["h"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"]},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["h"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["t"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["m"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["l"]}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":13},"action":"insert","lines":["></html>"],"id":9}],[{"start":{"row":0,"column":6},"end":{"row":0,"column":13},"action":"remove","lines":["</html>"],"id":10}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["    "],"id":11},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":28,"column":10},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":13}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":7},"action":"insert","lines":["</html>"],"id":14}],[{"start":{"row":8,"column":109},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":9,"column":0},"end":{"row":9,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":9,"column":24},"end":{"row":11,"column":26},"action":"insert","lines":["                    @if(auth()->user()->uinfo && auth()->user()->uinfo->profile_picture)","                        <img src=\"{{ asset(auth()->user()->uinfo->profile_picture) }}\" alt=\"Profile Picture\">","                    @endif"],"id":16}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":17}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":19}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":20}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":22},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":11,"column":30},"action":"remove","lines":["                        @if(auth()->user()->uinfo && auth()->user()->uinfo->profile_picture)","                            <img src=\"{{ asset(auth()->user()->uinfo->profile_picture) }}\" alt=\"Profile Picture\">","                        @endif"],"id":23},{"start":{"row":9,"column":0},"end":{"row":13,"column":26},"action":"insert","lines":["                    @if(auth()->user()->uinfo && auth()->user()->uinfo->profile_picture)","                        <img src=\"{{ asset(auth()->user()->uinfo->profile_picture) }}\" alt=\"Profile Picture\">","                    @else","                        <p>Profile Picture: Not Available</p>","                    @endif"]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":24},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"remove","lines":["("],"id":25}],[{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["("],"id":26}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["'"],"id":27},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["s"]},{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"insert","lines":["t"]},{"start":{"row":8,"column":46},"end":{"row":8,"column":47},"action":"insert","lines":["o"]}],[{"start":{"row":8,"column":44},"end":{"row":8,"column":47},"action":"remove","lines":["sto"],"id":28},{"start":{"row":8,"column":44},"end":{"row":8,"column":51},"action":"insert","lines":["storage"]}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["."],"id":29}],[{"start":{"row":8,"column":90},"end":{"row":8,"column":91},"action":"insert","lines":["'"],"id":30}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["/"],"id":32}],[{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"insert","lines":["'"],"id":33}],[{"start":{"row":8,"column":92},"end":{"row":8,"column":93},"action":"remove","lines":["'"],"id":34}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":30},"action":"remove","lines":["     @endif"],"id":35},{"start":{"row":12,"column":32},"end":{"row":12,"column":43},"action":"insert","lines":["     @endif"]}],[{"start":{"row":9,"column":0},"end":{"row":13,"column":19},"action":"remove","lines":["                        @if(auth()->user()->uinfo && auth()->user()->uinfo->profile_picture)","                            <img src=\"{{ asset(auth()->user()->uinfo->profile_picture) }}\" alt=\"Profile Picture\">","                        @else","                            <p>P     @endifrofile Picture: Not Available</p>","                   "],"id":36},{"start":{"row":8,"column":120},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":33},"end":{"row":3,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1709053494786,"hash":"f6a739833c015ae708b4b14747ec3e83db60cbd6"}