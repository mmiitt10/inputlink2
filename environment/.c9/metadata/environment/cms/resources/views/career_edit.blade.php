{"filter":false,"title":"career_edit.blade.php","tooltip":"/cms/resources/views/career_edit.blade.php","undoManager":{"mark":56,"position":56,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"action":"insert","lines":["<!-- uinfo.register.blade.php -->","","@extends('layouts.app') <!-- 既存のレイアウトを継承する場合 -->","","@section('slot')","    <form action=\"{{ route('career.store') }}\" method=\"POST\">","        @csrf","        ","        <div>","            <label for=\"career_company\">Company:</label>","            <input type=\"text\" name=\"career_company\" id=\"career_company\">","        </div>","        ","        <div>","            <label for=\"career_work_from\">Work From:</label>","            <input type=\"date\" name=\"career_work_from\" id=\"career_work_from\">","        </div>","        ","        <div>","            <label for=\"career_work_to\">Work To:</label>","            <input type=\"date\" name=\"career_work_to\" id=\"career_work_to\">","        </div>","        ","        <div>","            <label for=\"career_industry\">Industry:</label>","            <input type=\"text\" name=\"career_industry\" id=\"career_industry\">","        </div>","        ","        <div>","            <label for=\"career_function\">Function:</label>","            <input type=\"text\" name=\"career_function\" id=\"career_function\">","        </div>","        ","        <div>","            <label for=\"career_position\">Position:</label>","            <input type=\"text\" name=\"career_position\" id=\"career_position\">","        </div>","        ","        <button type=\"submit\">登録</button>","    </form>","","@endsection",""],"id":57}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":33},"action":"remove","lines":["<!-- uinfo.register.blade.php -->"],"id":58}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":59}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":60}],[{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":5,"column":0},"end":{"row":5,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"remove","lines":["    "],"id":62},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "]},{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":63},{"start":{"row":5,"column":0},"end":{"row":5,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"remove","lines":["    "],"id":64},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "]},{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":65},{"start":{"row":5,"column":0},"end":{"row":5,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"remove","lines":["    "],"id":66},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["          @method('PUT') <!-- PUTリクエストを送信するための方法を指定 -->",""],"id":67}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":[" "],"id":68},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":3,"column":17},"end":{"row":3,"column":46},"action":"remove","lines":["\"{{ route('career.store') }}\""],"id":69},{"start":{"row":3,"column":17},"end":{"row":3,"column":87},"action":"insert","lines":["\"{{ route('uinfo.update',  ['uinfo' => auth()->user()->uinfo->id]) }}\""]}],[{"start":{"row":3,"column":32},"end":{"row":3,"column":33},"action":"remove","lines":["o"],"id":70},{"start":{"row":3,"column":31},"end":{"row":3,"column":32},"action":"remove","lines":["f"]},{"start":{"row":3,"column":30},"end":{"row":3,"column":31},"action":"remove","lines":["n"]},{"start":{"row":3,"column":29},"end":{"row":3,"column":30},"action":"remove","lines":["i"]},{"start":{"row":3,"column":28},"end":{"row":3,"column":29},"action":"remove","lines":["u"]}],[{"start":{"row":3,"column":28},"end":{"row":3,"column":29},"action":"insert","lines":["c"],"id":71},{"start":{"row":3,"column":29},"end":{"row":3,"column":30},"action":"insert","lines":["a"]},{"start":{"row":3,"column":30},"end":{"row":3,"column":31},"action":"insert","lines":["r"]},{"start":{"row":3,"column":31},"end":{"row":3,"column":32},"action":"insert","lines":["e"]},{"start":{"row":3,"column":32},"end":{"row":3,"column":33},"action":"insert","lines":["e"]},{"start":{"row":3,"column":33},"end":{"row":3,"column":34},"action":"insert","lines":["r"]}],[{"start":{"row":3,"column":51},"end":{"row":3,"column":52},"action":"remove","lines":["o"],"id":72},{"start":{"row":3,"column":50},"end":{"row":3,"column":51},"action":"remove","lines":["f"]},{"start":{"row":3,"column":49},"end":{"row":3,"column":50},"action":"remove","lines":["n"]},{"start":{"row":3,"column":48},"end":{"row":3,"column":49},"action":"remove","lines":["i"]},{"start":{"row":3,"column":47},"end":{"row":3,"column":48},"action":"remove","lines":["u"]}],[{"start":{"row":3,"column":47},"end":{"row":3,"column":48},"action":"insert","lines":["c"],"id":73},{"start":{"row":3,"column":48},"end":{"row":3,"column":49},"action":"insert","lines":["a"]},{"start":{"row":3,"column":49},"end":{"row":3,"column":50},"action":"insert","lines":["r"]},{"start":{"row":3,"column":50},"end":{"row":3,"column":51},"action":"insert","lines":["e"]},{"start":{"row":3,"column":51},"end":{"row":3,"column":52},"action":"insert","lines":["e"]},{"start":{"row":3,"column":52},"end":{"row":3,"column":53},"action":"insert","lines":["r"]}],[{"start":{"row":3,"column":78},"end":{"row":3,"column":79},"action":"remove","lines":["o"],"id":74},{"start":{"row":3,"column":77},"end":{"row":3,"column":78},"action":"remove","lines":["f"]},{"start":{"row":3,"column":76},"end":{"row":3,"column":77},"action":"remove","lines":["n"]},{"start":{"row":3,"column":75},"end":{"row":3,"column":76},"action":"remove","lines":["i"]},{"start":{"row":3,"column":74},"end":{"row":3,"column":75},"action":"remove","lines":["u"]}],[{"start":{"row":3,"column":74},"end":{"row":3,"column":75},"action":"insert","lines":["c"],"id":75},{"start":{"row":3,"column":75},"end":{"row":3,"column":76},"action":"insert","lines":["a"]},{"start":{"row":3,"column":76},"end":{"row":3,"column":77},"action":"insert","lines":["r"]},{"start":{"row":3,"column":77},"end":{"row":3,"column":78},"action":"insert","lines":["e"]},{"start":{"row":3,"column":78},"end":{"row":3,"column":79},"action":"insert","lines":["e"]},{"start":{"row":3,"column":79},"end":{"row":3,"column":80},"action":"insert","lines":["r"]}],[{"start":{"row":10,"column":72},"end":{"row":10,"column":73},"action":"insert","lines":[" "],"id":76}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":107},"action":"insert","lines":["value=\"{{ $uinfo->profile_name }}\""],"id":77}],[{"start":{"row":10,"column":88},"end":{"row":10,"column":89},"action":"remove","lines":["o"],"id":78},{"start":{"row":10,"column":87},"end":{"row":10,"column":88},"action":"remove","lines":["f"]},{"start":{"row":10,"column":86},"end":{"row":10,"column":87},"action":"remove","lines":["n"]},{"start":{"row":10,"column":85},"end":{"row":10,"column":86},"action":"remove","lines":["i"]},{"start":{"row":10,"column":84},"end":{"row":10,"column":85},"action":"remove","lines":["u"]}],[{"start":{"row":10,"column":84},"end":{"row":10,"column":85},"action":"insert","lines":["c"],"id":79},{"start":{"row":10,"column":85},"end":{"row":10,"column":86},"action":"insert","lines":["a"]},{"start":{"row":10,"column":86},"end":{"row":10,"column":87},"action":"insert","lines":["r"]},{"start":{"row":10,"column":87},"end":{"row":10,"column":88},"action":"insert","lines":["e"]},{"start":{"row":10,"column":88},"end":{"row":10,"column":89},"action":"insert","lines":["e"]},{"start":{"row":10,"column":89},"end":{"row":10,"column":90},"action":"insert","lines":["r"]}],[{"start":{"row":10,"column":103},"end":{"row":10,"column":104},"action":"remove","lines":["e"],"id":80},{"start":{"row":10,"column":102},"end":{"row":10,"column":103},"action":"remove","lines":["m"]},{"start":{"row":10,"column":101},"end":{"row":10,"column":102},"action":"remove","lines":["a"]},{"start":{"row":10,"column":100},"end":{"row":10,"column":101},"action":"remove","lines":["n"]},{"start":{"row":10,"column":99},"end":{"row":10,"column":100},"action":"remove","lines":["_"]},{"start":{"row":10,"column":98},"end":{"row":10,"column":99},"action":"remove","lines":["e"]},{"start":{"row":10,"column":97},"end":{"row":10,"column":98},"action":"remove","lines":["l"]},{"start":{"row":10,"column":96},"end":{"row":10,"column":97},"action":"remove","lines":["i"]},{"start":{"row":10,"column":95},"end":{"row":10,"column":96},"action":"remove","lines":["f"]},{"start":{"row":10,"column":94},"end":{"row":10,"column":95},"action":"remove","lines":["o"]},{"start":{"row":10,"column":93},"end":{"row":10,"column":94},"action":"remove","lines":["r"]},{"start":{"row":10,"column":92},"end":{"row":10,"column":93},"action":"remove","lines":["p"]}],[{"start":{"row":10,"column":92},"end":{"row":10,"column":106},"action":"insert","lines":["career_company"],"id":81}],[{"start":{"row":15,"column":76},"end":{"row":15,"column":77},"action":"insert","lines":[" "],"id":82}],[{"start":{"row":15,"column":77},"end":{"row":15,"column":114},"action":"insert","lines":["value=\"{{ $career->career_company }}\""],"id":83}],[{"start":{"row":15,"column":96},"end":{"row":15,"column":110},"action":"remove","lines":["career_company"],"id":84},{"start":{"row":15,"column":96},"end":{"row":15,"column":112},"action":"insert","lines":["career_work_from"]}],[{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"insert","lines":[" "],"id":85}],[{"start":{"row":20,"column":73},"end":{"row":20,"column":112},"action":"insert","lines":["value=\"{{ $career->career_work_from }}\""],"id":86}],[{"start":{"row":20,"column":107},"end":{"row":20,"column":108},"action":"remove","lines":["m"],"id":87},{"start":{"row":20,"column":106},"end":{"row":20,"column":107},"action":"remove","lines":["o"]},{"start":{"row":20,"column":105},"end":{"row":20,"column":106},"action":"remove","lines":["r"]},{"start":{"row":20,"column":104},"end":{"row":20,"column":105},"action":"remove","lines":["f"]}],[{"start":{"row":20,"column":104},"end":{"row":20,"column":105},"action":"insert","lines":["t"],"id":88},{"start":{"row":20,"column":105},"end":{"row":20,"column":106},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":74},"end":{"row":25,"column":75},"action":"insert","lines":[" "],"id":89}],[{"start":{"row":25,"column":75},"end":{"row":25,"column":114},"action":"insert","lines":["value=\"{{ $career->career_work_from }}\""],"id":90}],[{"start":{"row":25,"column":109},"end":{"row":25,"column":110},"action":"remove","lines":["m"],"id":91},{"start":{"row":25,"column":108},"end":{"row":25,"column":109},"action":"remove","lines":["o"]},{"start":{"row":25,"column":107},"end":{"row":25,"column":108},"action":"remove","lines":["r"]},{"start":{"row":25,"column":106},"end":{"row":25,"column":107},"action":"remove","lines":["f"]},{"start":{"row":25,"column":105},"end":{"row":25,"column":106},"action":"remove","lines":["_"]},{"start":{"row":25,"column":104},"end":{"row":25,"column":105},"action":"remove","lines":["k"]},{"start":{"row":25,"column":103},"end":{"row":25,"column":104},"action":"remove","lines":["r"]},{"start":{"row":25,"column":102},"end":{"row":25,"column":103},"action":"remove","lines":["o"]},{"start":{"row":25,"column":101},"end":{"row":25,"column":102},"action":"remove","lines":["w"]}],[{"start":{"row":25,"column":101},"end":{"row":25,"column":102},"action":"insert","lines":["i"],"id":92},{"start":{"row":25,"column":102},"end":{"row":25,"column":103},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":94},"end":{"row":25,"column":103},"action":"remove","lines":["career_in"],"id":93},{"start":{"row":25,"column":94},"end":{"row":25,"column":109},"action":"insert","lines":["career_industry"]}],[{"start":{"row":30,"column":74},"end":{"row":30,"column":75},"action":"insert","lines":[" "],"id":94}],[{"start":{"row":30,"column":75},"end":{"row":30,"column":114},"action":"insert","lines":["value=\"{{ $career->career_work_from }}\""],"id":95}],[{"start":{"row":30,"column":109},"end":{"row":30,"column":110},"action":"remove","lines":["m"],"id":96},{"start":{"row":30,"column":108},"end":{"row":30,"column":109},"action":"remove","lines":["o"]},{"start":{"row":30,"column":107},"end":{"row":30,"column":108},"action":"remove","lines":["r"]},{"start":{"row":30,"column":106},"end":{"row":30,"column":107},"action":"remove","lines":["f"]},{"start":{"row":30,"column":105},"end":{"row":30,"column":106},"action":"remove","lines":["_"]},{"start":{"row":30,"column":104},"end":{"row":30,"column":105},"action":"remove","lines":["k"]},{"start":{"row":30,"column":103},"end":{"row":30,"column":104},"action":"remove","lines":["r"]},{"start":{"row":30,"column":102},"end":{"row":30,"column":103},"action":"remove","lines":["o"]},{"start":{"row":30,"column":101},"end":{"row":30,"column":102},"action":"remove","lines":["w"]}],[{"start":{"row":30,"column":101},"end":{"row":30,"column":102},"action":"insert","lines":["f"],"id":97},{"start":{"row":30,"column":102},"end":{"row":30,"column":103},"action":"insert","lines":["u"]},{"start":{"row":30,"column":103},"end":{"row":30,"column":104},"action":"insert","lines":["n"]}],[{"start":{"row":30,"column":94},"end":{"row":30,"column":104},"action":"remove","lines":["career_fun"],"id":98},{"start":{"row":30,"column":94},"end":{"row":30,"column":109},"action":"insert","lines":["career_function"]}],[{"start":{"row":35,"column":74},"end":{"row":35,"column":75},"action":"insert","lines":[" "],"id":99}],[{"start":{"row":35,"column":75},"end":{"row":35,"column":114},"action":"insert","lines":["value=\"{{ $career->career_work_from }}\""],"id":100}],[{"start":{"row":35,"column":109},"end":{"row":35,"column":110},"action":"remove","lines":["m"],"id":101},{"start":{"row":35,"column":108},"end":{"row":35,"column":109},"action":"remove","lines":["o"]},{"start":{"row":35,"column":107},"end":{"row":35,"column":108},"action":"remove","lines":["r"]},{"start":{"row":35,"column":106},"end":{"row":35,"column":107},"action":"remove","lines":["f"]},{"start":{"row":35,"column":105},"end":{"row":35,"column":106},"action":"remove","lines":["_"]},{"start":{"row":35,"column":104},"end":{"row":35,"column":105},"action":"remove","lines":["k"]},{"start":{"row":35,"column":103},"end":{"row":35,"column":104},"action":"remove","lines":["r"]},{"start":{"row":35,"column":102},"end":{"row":35,"column":103},"action":"remove","lines":["o"]},{"start":{"row":35,"column":101},"end":{"row":35,"column":102},"action":"remove","lines":["w"]}],[{"start":{"row":35,"column":101},"end":{"row":35,"column":102},"action":"insert","lines":["p"],"id":102},{"start":{"row":35,"column":102},"end":{"row":35,"column":103},"action":"insert","lines":["o"]}],[{"start":{"row":35,"column":94},"end":{"row":35,"column":103},"action":"remove","lines":["career_po"],"id":103},{"start":{"row":35,"column":94},"end":{"row":35,"column":109},"action":"insert","lines":["career_position"]}],[{"start":{"row":38,"column":31},"end":{"row":38,"column":32},"action":"remove","lines":["録"],"id":104},{"start":{"row":38,"column":30},"end":{"row":38,"column":31},"action":"remove","lines":["登"]}],[{"start":{"row":38,"column":30},"end":{"row":38,"column":32},"action":"insert","lines":["更新"],"id":105}],[{"start":{"row":38,"column":29},"end":{"row":38,"column":30},"action":"insert","lines":["　"],"id":106}],[{"start":{"row":38,"column":30},"end":{"row":38,"column":53},"action":"insert","lines":["class=\"btn btn-primary\""],"id":107}],[{"start":{"row":3,"column":80},"end":{"row":3,"column":81},"action":"insert","lines":["["],"id":108},{"start":{"row":3,"column":81},"end":{"row":3,"column":82},"action":"insert","lines":["0"]},{"start":{"row":3,"column":82},"end":{"row":3,"column":83},"action":"insert","lines":[":"]}],[{"start":{"row":3,"column":82},"end":{"row":3,"column":83},"action":"remove","lines":[":"],"id":109}],[{"start":{"row":3,"column":82},"end":{"row":3,"column":83},"action":"insert","lines":["]"],"id":110}],[{"start":{"row":3,"column":58},"end":{"row":3,"column":74},"action":"remove","lines":["auth()->user()->"],"id":111}],[{"start":{"row":3,"column":58},"end":{"row":3,"column":59},"action":"insert","lines":["$"],"id":112}],[{"start":{"row":3,"column":67},"end":{"row":3,"column":68},"action":"remove","lines":["]"],"id":113},{"start":{"row":3,"column":66},"end":{"row":3,"column":67},"action":"remove","lines":["0"]},{"start":{"row":3,"column":65},"end":{"row":3,"column":66},"action":"remove","lines":["["]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":285.37421874999995,"selection":{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1709565233993,"hash":"2831fce4101f96a09ddf4710fcd707ca2fa9fe55"}