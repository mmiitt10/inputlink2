{"filter":false,"title":"uinfo_register.blade.php","tooltip":"/cms/resources/views/uinfo_register.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["<!-- uinfo.register.blade.php -->","","@extends('layouts.app') <!-- 既存のレイアウトを継承する場合 -->","","@section('content')","    <div class=\"container\">","        <h2>ユーザー情報登録</h2>","        <form action=\"{{ route('uinfo.store') }}\" method=\"POST\" enctype=\"multipart/form-data\">","            @csrf <!-- CSRFトークンを含める -->","","            <div class=\"form-group\">","                <label for=\"profile_name\">名前:</label>","                <input type=\"text\" class=\"form-control\" id=\"profile_name\" name=\"profile_name\" required>","            </div>","","            <div class=\"form-group\">","                <label for=\"profile_age\">年齢:</label>","                <input type=\"number\" class=\"form-control\" id=\"profile_age\" name=\"profile_age\">","            </div>","","            <div class=\"form-group\">","                <label for=\"profile_picture\">プロフィール画像:</label>","                <input type=\"file\" class=\"form-control\" id=\"profile_picture\" name=\"profile_picture\">","            </div>","","            <div class=\"form-group\">","                <label for=\"profile_intro\">自己紹介:</label>","                <textarea class=\"form-control\" id=\"profile_intro\" name=\"profile_intro\"></textarea>","            </div>","","            <button type=\"submit\" class=\"btn btn-primary\">登録</button>","        </form>","    </div>","@endsection",""],"id":1}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["t"],"id":6},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["n"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["e"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["t"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["n"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["o"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["c"]}],[{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["s"],"id":7},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["l"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["o"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":40},"end":{"row":16,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1708957789644,"hash":"8a700c1059578fc7de97d637fabb56206ad94397"}