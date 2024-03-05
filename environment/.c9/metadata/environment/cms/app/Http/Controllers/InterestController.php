{"filter":false,"title":"InterestController.php","tooltip":"/cms/app/Http/Controllers/InterestController.php","undoManager":{"mark":74,"position":74,"stack":[[{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"remove","lines":["/"],"id":76},{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":30,"column":8},"end":{"row":56,"column":5},"action":"insert","lines":["        // バリデーションルールの定義","        $rules = [","            'interest_industry1' => 'required|string|max:255',","            'interest_industry2' => 'required|string|max:255',","            'interest_industry3' => 'required|string|max:255',","            'interest_function1' => 'required|string|max:255',","            'interest_function2' => 'required|string|max:255',","            'interest_function3' => 'required|string|max:255',","        ];","        ","        // バリデーションの実行","        $request->validate($rules);","","        // モデルを使用してデータを保存","        $interest = new Interest();","        $interest->user_id = auth()->id();","        $interest->interest_industry1 = $request->input('interest_industry1');","        $interest->interest_industry2 = $request->input('interest_industry2');","        $interest->interest_industry3 = $request->input('interest_industry3');","        $interest->interest_function1 = $request->input('interest_function1');","        $interest->interest_function2 = $request->input('interest_function2');","        $interest->interest_function3 = $request->input('interest_function3');","        $interest->save();","","        // リダイレクトまたはレスポンスを返す","        return redirect()->route('interests.index')->with('success', 'Interest created successfully!');","    }"],"id":77}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":16},"action":"remove","lines":["    "],"id":78},{"start":{"row":30,"column":8},"end":{"row":30,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":57,"column":4},"end":{"row":57,"column":5},"action":"remove","lines":["}"],"id":79},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"remove","lines":["    "]},{"start":{"row":56,"column":5},"end":{"row":57,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":55,"column":25},"end":{"row":55,"column":102},"action":"remove","lines":["->route('interests.index')->with('success', 'Interest created successfully!')"],"id":80}],[{"start":{"row":55,"column":24},"end":{"row":55,"column":26},"action":"insert","lines":["''"],"id":81}],[{"start":{"row":55,"column":25},"end":{"row":55,"column":26},"action":"insert","lines":["c"],"id":82},{"start":{"row":55,"column":26},"end":{"row":55,"column":27},"action":"insert","lines":["a"]},{"start":{"row":55,"column":27},"end":{"row":55,"column":28},"action":"insert","lines":["r"]},{"start":{"row":55,"column":28},"end":{"row":55,"column":29},"action":"insert","lines":["e"]},{"start":{"row":55,"column":29},"end":{"row":55,"column":30},"action":"insert","lines":["e"]},{"start":{"row":55,"column":30},"end":{"row":55,"column":31},"action":"insert","lines":["r"]}],[{"start":{"row":55,"column":31},"end":{"row":55,"column":32},"action":"insert","lines":["."],"id":83},{"start":{"row":55,"column":32},"end":{"row":55,"column":33},"action":"insert","lines":["c"]},{"start":{"row":55,"column":33},"end":{"row":55,"column":34},"action":"insert","lines":["r"]},{"start":{"row":55,"column":34},"end":{"row":55,"column":35},"action":"insert","lines":["e"]}],[{"start":{"row":55,"column":35},"end":{"row":55,"column":36},"action":"insert","lines":["a"],"id":84},{"start":{"row":55,"column":36},"end":{"row":55,"column":37},"action":"insert","lines":["t"]},{"start":{"row":55,"column":37},"end":{"row":55,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":85}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":36},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Validator;","use Illuminate\\Support\\Facades\\Auth;"],"id":86}],[{"start":{"row":7,"column":36},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":87},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":11,"column":28},"action":"insert","lines":["// ファサード","use Illuminate\\Support\\Facades\\Route;","use Illuminate\\Http\\Request;"],"id":88}],[{"start":{"row":8,"column":0},"end":{"row":11,"column":28},"action":"remove","lines":["","// ファサード","use Illuminate\\Support\\Facades\\Route;","use Illuminate\\Http\\Request;"],"id":89},{"start":{"row":7,"column":36},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":57,"column":31},"end":{"row":57,"column":32},"action":"remove","lines":["."],"id":90}],[{"start":{"row":57,"column":31},"end":{"row":57,"column":32},"action":"insert","lines":["/"],"id":91}],[{"start":{"row":57,"column":25},"end":{"row":57,"column":26},"action":"insert","lines":["/"],"id":92}],[{"start":{"row":73,"column":9},"end":{"row":73,"column":10},"action":"remove","lines":["/"],"id":93},{"start":{"row":73,"column":8},"end":{"row":73,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":73,"column":8},"end":{"row":73,"column":63},"action":"insert","lines":["        return view('uinfo_edit', ['uinfo' => $uinfo]);"],"id":94}],[{"start":{"row":73,"column":14},"end":{"row":73,"column":15},"action":"remove","lines":[" "],"id":95}],[{"start":{"row":73,"column":14},"end":{"row":73,"column":15},"action":"remove","lines":[" "],"id":96},{"start":{"row":73,"column":13},"end":{"row":73,"column":14},"action":"remove","lines":[" "]},{"start":{"row":73,"column":12},"end":{"row":73,"column":13},"action":"remove","lines":[" "]},{"start":{"row":73,"column":8},"end":{"row":73,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":73,"column":25},"end":{"row":73,"column":26},"action":"remove","lines":["o"],"id":97},{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"remove","lines":["f"]},{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["n"]},{"start":{"row":73,"column":22},"end":{"row":73,"column":23},"action":"remove","lines":["i"]},{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"remove","lines":["u"]}],[{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"insert","lines":["i"],"id":98},{"start":{"row":73,"column":22},"end":{"row":73,"column":23},"action":"insert","lines":["n"]},{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["t"]},{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"insert","lines":["e"]},{"start":{"row":73,"column":25},"end":{"row":73,"column":26},"action":"insert","lines":["r"]},{"start":{"row":73,"column":26},"end":{"row":73,"column":27},"action":"insert","lines":["e"]},{"start":{"row":73,"column":27},"end":{"row":73,"column":28},"action":"insert","lines":["s"]},{"start":{"row":73,"column":28},"end":{"row":73,"column":29},"action":"insert","lines":["t"]}],[{"start":{"row":73,"column":43},"end":{"row":73,"column":44},"action":"remove","lines":["o"],"id":99},{"start":{"row":73,"column":42},"end":{"row":73,"column":43},"action":"remove","lines":["f"]},{"start":{"row":73,"column":41},"end":{"row":73,"column":42},"action":"remove","lines":["n"]},{"start":{"row":73,"column":40},"end":{"row":73,"column":41},"action":"remove","lines":["i"]},{"start":{"row":73,"column":39},"end":{"row":73,"column":40},"action":"remove","lines":["u"]}],[{"start":{"row":73,"column":39},"end":{"row":73,"column":40},"action":"insert","lines":["i"],"id":100},{"start":{"row":73,"column":40},"end":{"row":73,"column":41},"action":"insert","lines":["n"]},{"start":{"row":73,"column":41},"end":{"row":73,"column":42},"action":"insert","lines":["t"]},{"start":{"row":73,"column":42},"end":{"row":73,"column":43},"action":"insert","lines":["e"]},{"start":{"row":73,"column":43},"end":{"row":73,"column":44},"action":"insert","lines":["r"]},{"start":{"row":73,"column":44},"end":{"row":73,"column":45},"action":"insert","lines":["e"]},{"start":{"row":73,"column":45},"end":{"row":73,"column":46},"action":"insert","lines":["s"]},{"start":{"row":73,"column":46},"end":{"row":73,"column":47},"action":"insert","lines":["t"]}],[{"start":{"row":73,"column":57},"end":{"row":73,"column":58},"action":"remove","lines":["o"],"id":101},{"start":{"row":73,"column":56},"end":{"row":73,"column":57},"action":"remove","lines":["f"]},{"start":{"row":73,"column":55},"end":{"row":73,"column":56},"action":"remove","lines":["n"]},{"start":{"row":73,"column":54},"end":{"row":73,"column":55},"action":"remove","lines":["i"]},{"start":{"row":73,"column":53},"end":{"row":73,"column":54},"action":"remove","lines":["u"]}],[{"start":{"row":73,"column":53},"end":{"row":73,"column":54},"action":"insert","lines":["i"],"id":102},{"start":{"row":73,"column":54},"end":{"row":73,"column":55},"action":"insert","lines":["n"]},{"start":{"row":73,"column":55},"end":{"row":73,"column":56},"action":"insert","lines":["t"]},{"start":{"row":73,"column":56},"end":{"row":73,"column":57},"action":"insert","lines":["e"]},{"start":{"row":73,"column":57},"end":{"row":73,"column":58},"action":"insert","lines":["r"]},{"start":{"row":73,"column":58},"end":{"row":73,"column":59},"action":"insert","lines":["e"]},{"start":{"row":73,"column":59},"end":{"row":73,"column":60},"action":"insert","lines":["s"]},{"start":{"row":73,"column":60},"end":{"row":73,"column":61},"action":"insert","lines":["t"]}],[{"start":{"row":81,"column":9},"end":{"row":81,"column":10},"action":"remove","lines":["/"],"id":103},{"start":{"row":81,"column":8},"end":{"row":81,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":81,"column":8},"end":{"row":106,"column":42},"action":"insert","lines":["        // バリデーションルールの定義","        $rules = [","            'interest_industry1' => 'required|string|max:255',","            'interest_industry2' => 'required|string|max:255',","            'interest_industry3' => 'required|string|max:255',","            'interest_function1' => 'required|string|max:255',","            'interest_function2' => 'required|string|max:255',","            'interest_function3' => 'required|string|max:255',","        ];","        ","        // バリデーションの実行","        $request->validate($rules);","","        // モデルを使用してデータを保存","        $interest = new Interest();","        $interest->user_id = auth()->id();","        $interest->interest_industry1 = $request->input('interest_industry1');","        $interest->interest_industry2 = $request->input('interest_industry2');","        $interest->interest_industry3 = $request->input('interest_industry3');","        $interest->interest_function1 = $request->input('interest_function1');","        $interest->interest_function2 = $request->input('interest_function2');","        $interest->interest_function3 = $request->input('interest_function3');","        $interest->save();","","        // リダイレクトまたはレスポンスを返す","        return redirect('/career/create');"],"id":104}],[{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"remove","lines":["    "],"id":105}],[{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"remove","lines":["    "],"id":106}],[{"start":{"row":32,"column":24},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":107},{"start":{"row":33,"column":0},"end":{"row":33,"column":8},"action":"insert","lines":["        "]},{"start":{"row":33,"column":8},"end":{"row":34,"column":0},"action":"insert","lines":["",""]},{"start":{"row":34,"column":0},"end":{"row":34,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"insert","lines":["v"],"id":108},{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"insert","lines":["a"]}],[{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"remove","lines":["a"],"id":109},{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"remove","lines":["v"]}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":60},"action":"insert","lines":["        $validator=Validator::make($request->all(),["],"id":110}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"remove","lines":["    "],"id":111}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"remove","lines":["    "],"id":112}],[{"start":{"row":33,"column":52},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":34,"column":0},"end":{"row":34,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":12},"action":"remove","lines":["    "],"id":114}],[{"start":{"row":34,"column":0},"end":{"row":36,"column":18},"action":"remove","lines":["        ","        ","        $rules = ["],"id":115},{"start":{"row":33,"column":52},"end":{"row":34,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":40,"column":9},"end":{"row":40,"column":10},"action":"insert","lines":[")"],"id":116}],[{"start":{"row":43,"column":8},"end":{"row":43,"column":35},"action":"remove","lines":["$request->validate($rules);"],"id":117}],[{"start":{"row":43,"column":8},"end":{"row":47,"column":9},"action":"insert","lines":["        if($validator->fails()){","            return redirect('/')","                ->withInput","                ->withErrors($validator);","        }"],"id":118}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"remove","lines":["    "],"id":119}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"remove","lines":["    "],"id":120}],[{"start":{"row":52,"column":56},"end":{"row":52,"column":57},"action":"remove","lines":["'"],"id":121},{"start":{"row":52,"column":55},"end":{"row":52,"column":56},"action":"remove","lines":["("]},{"start":{"row":52,"column":54},"end":{"row":52,"column":55},"action":"remove","lines":["t"]},{"start":{"row":52,"column":53},"end":{"row":52,"column":54},"action":"remove","lines":["u"]}],[{"start":{"row":52,"column":52},"end":{"row":52,"column":53},"action":"remove","lines":["p"],"id":122},{"start":{"row":52,"column":51},"end":{"row":52,"column":52},"action":"remove","lines":["n"]},{"start":{"row":52,"column":50},"end":{"row":52,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":52,"column":69},"end":{"row":52,"column":70},"action":"remove","lines":[")"],"id":123},{"start":{"row":52,"column":68},"end":{"row":52,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":53,"column":56},"end":{"row":53,"column":57},"action":"remove","lines":["'"],"id":124},{"start":{"row":53,"column":55},"end":{"row":53,"column":56},"action":"remove","lines":["("]},{"start":{"row":53,"column":54},"end":{"row":53,"column":55},"action":"remove","lines":["t"]},{"start":{"row":53,"column":53},"end":{"row":53,"column":54},"action":"remove","lines":["u"]},{"start":{"row":53,"column":52},"end":{"row":53,"column":53},"action":"remove","lines":["p"]},{"start":{"row":53,"column":51},"end":{"row":53,"column":52},"action":"remove","lines":["n"]},{"start":{"row":53,"column":50},"end":{"row":53,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":53,"column":69},"end":{"row":53,"column":70},"action":"remove","lines":[")"],"id":125},{"start":{"row":53,"column":68},"end":{"row":53,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":54,"column":56},"end":{"row":54,"column":57},"action":"remove","lines":["'"],"id":126},{"start":{"row":54,"column":55},"end":{"row":54,"column":56},"action":"remove","lines":["("]},{"start":{"row":54,"column":54},"end":{"row":54,"column":55},"action":"remove","lines":["t"]},{"start":{"row":54,"column":53},"end":{"row":54,"column":54},"action":"remove","lines":["u"]},{"start":{"row":54,"column":52},"end":{"row":54,"column":53},"action":"remove","lines":["p"]},{"start":{"row":54,"column":51},"end":{"row":54,"column":52},"action":"remove","lines":["n"]},{"start":{"row":54,"column":50},"end":{"row":54,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":54,"column":69},"end":{"row":54,"column":70},"action":"remove","lines":[")"],"id":127},{"start":{"row":54,"column":68},"end":{"row":54,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":55,"column":55},"end":{"row":55,"column":56},"action":"remove","lines":["("],"id":128},{"start":{"row":55,"column":54},"end":{"row":55,"column":55},"action":"remove","lines":["t"]},{"start":{"row":55,"column":53},"end":{"row":55,"column":54},"action":"remove","lines":["u"]},{"start":{"row":55,"column":52},"end":{"row":55,"column":53},"action":"remove","lines":["p"]},{"start":{"row":55,"column":51},"end":{"row":55,"column":52},"action":"remove","lines":["n"]},{"start":{"row":55,"column":50},"end":{"row":55,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":55,"column":50},"end":{"row":55,"column":51},"action":"remove","lines":["'"],"id":129}],[{"start":{"row":55,"column":69},"end":{"row":55,"column":70},"action":"remove","lines":[")"],"id":130},{"start":{"row":55,"column":68},"end":{"row":55,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":56,"column":56},"end":{"row":56,"column":57},"action":"remove","lines":["'"],"id":131},{"start":{"row":56,"column":55},"end":{"row":56,"column":56},"action":"remove","lines":["("]},{"start":{"row":56,"column":54},"end":{"row":56,"column":55},"action":"remove","lines":["t"]},{"start":{"row":56,"column":53},"end":{"row":56,"column":54},"action":"remove","lines":["u"]},{"start":{"row":56,"column":52},"end":{"row":56,"column":53},"action":"remove","lines":["p"]},{"start":{"row":56,"column":51},"end":{"row":56,"column":52},"action":"remove","lines":["n"]},{"start":{"row":56,"column":50},"end":{"row":56,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":56,"column":69},"end":{"row":56,"column":70},"action":"remove","lines":[")"],"id":132},{"start":{"row":56,"column":68},"end":{"row":56,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":57,"column":56},"end":{"row":57,"column":57},"action":"remove","lines":["'"],"id":133},{"start":{"row":57,"column":55},"end":{"row":57,"column":56},"action":"remove","lines":["("]},{"start":{"row":57,"column":54},"end":{"row":57,"column":55},"action":"remove","lines":["t"]},{"start":{"row":57,"column":53},"end":{"row":57,"column":54},"action":"remove","lines":["u"]},{"start":{"row":57,"column":52},"end":{"row":57,"column":53},"action":"remove","lines":["p"]},{"start":{"row":57,"column":51},"end":{"row":57,"column":52},"action":"remove","lines":["n"]},{"start":{"row":57,"column":50},"end":{"row":57,"column":51},"action":"remove","lines":["i"]}],[{"start":{"row":57,"column":69},"end":{"row":57,"column":70},"action":"remove","lines":[")"],"id":134},{"start":{"row":57,"column":68},"end":{"row":57,"column":69},"action":"remove","lines":["'"]}],[{"start":{"row":85,"column":24},"end":{"row":86,"column":0},"action":"insert","lines":["",""],"id":135},{"start":{"row":86,"column":0},"end":{"row":86,"column":8},"action":"insert","lines":["        "]},{"start":{"row":86,"column":8},"end":{"row":87,"column":0},"action":"insert","lines":["",""]},{"start":{"row":87,"column":0},"end":{"row":87,"column":8},"action":"insert","lines":["        "]},{"start":{"row":87,"column":8},"end":{"row":88,"column":0},"action":"insert","lines":["",""]},{"start":{"row":88,"column":0},"end":{"row":88,"column":8},"action":"insert","lines":["        "]},{"start":{"row":88,"column":8},"end":{"row":89,"column":0},"action":"insert","lines":["",""]},{"start":{"row":89,"column":0},"end":{"row":89,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":86,"column":8},"end":{"row":115,"column":42},"action":"insert","lines":["        // バリデーションルールの定義","        $validator=Validator::make($request->all(),[","            'interest_industry1' => 'required|string|max:255',","            'interest_industry2' => 'required|string|max:255',","            'interest_industry3' => 'required|string|max:255',","            'interest_function1' => 'required|string|max:255',","            'interest_function2' => 'required|string|max:255',","            'interest_function3' => 'required|string|max:255',","        ]);","        ","        // バリデーションの実行","        if($validator->fails()){","            return redirect('/')","                ->withInput","                ->withErrors($validator);","        }","","        // モデルを使用してデータを保存","        $interest = new Interest();","        $interest->user_id = auth()->id();","        $interest->interest_industry1 = $request->interest_industry1;","        $interest->interest_industry2 = $request->interest_industry2;","        $interest->interest_industry3 = $request->interest_industry3;","        $interest->interest_function1 = $request->interest_function1;","        $interest->interest_function2 = $request->interest_function2;","        $interest->interest_function3 = $request->interest_function3;","        $interest->save();","","        // リダイレクトまたはレスポンスを返す","        return redirect('/career/create');"],"id":136}],[{"start":{"row":86,"column":0},"end":{"row":86,"column":32},"action":"remove","lines":["                // バリデーションルールの定義"],"id":137},{"start":{"row":85,"column":24},"end":{"row":86,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":95,"column":18},"end":{"row":95,"column":21},"action":"insert","lines":["エラー"],"id":138}],[{"start":{"row":95,"column":23},"end":{"row":95,"column":24},"action":"remove","lines":["行"],"id":139},{"start":{"row":95,"column":22},"end":{"row":95,"column":23},"action":"remove","lines":["実"]},{"start":{"row":95,"column":21},"end":{"row":95,"column":22},"action":"remove","lines":["の"]}],[{"start":{"row":95,"column":21},"end":{"row":95,"column":24},"action":"insert","lines":["を設定"],"id":140}],[{"start":{"row":96,"column":0},"end":{"row":100,"column":9},"action":"remove","lines":["        if($validator->fails()){","            return redirect('/')","                ->withInput","                ->withErrors($validator);","        }"],"id":141},{"start":{"row":96,"column":0},"end":{"row":98,"column":5},"action":"insert","lines":["    if ($validator->fails()) {","        return redirect()->back()->withErrors($validator)->withInput();","    }"]}],[{"start":{"row":96,"column":0},"end":{"row":96,"column":4},"action":"insert","lines":["    "],"id":142},{"start":{"row":97,"column":0},"end":{"row":97,"column":4},"action":"insert","lines":["    "]},{"start":{"row":98,"column":0},"end":{"row":98,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":0},"end":{"row":47,"column":9},"action":"remove","lines":["        // バリデーションの実行","        if($validator->fails()){","            return redirect('/')","                ->withInput","                ->withErrors($validator);","        }"],"id":143},{"start":{"row":42,"column":0},"end":{"row":45,"column":9},"action":"insert","lines":["        // バリデーションエラーを設定","        if ($validator->fails()) {","            return redirect()->back()->withErrors($validator)->withInput();","        }"]}],[{"start":{"row":99,"column":0},"end":{"row":100,"column":42},"action":"remove","lines":["        $interest = new Interest();","        $interest->user_id = auth()->id();"],"id":144},{"start":{"row":98,"column":25},"end":{"row":99,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":108,"column":0},"end":{"row":108,"column":42},"action":"remove","lines":["        return redirect('/career/create');"],"id":145},{"start":{"row":108,"column":0},"end":{"row":108,"column":58},"action":"insert","lines":["    return redirect('/')->with('success', '登録情報が更新されました');"]}],[{"start":{"row":108,"column":4},"end":{"row":108,"column":8},"action":"insert","lines":["    "],"id":146}],[{"start":{"row":111,"column":0},"end":{"row":137,"column":0},"action":"remove","lines":["        ","        $rules = [","            'interest_industry1' => 'required|string|max:255',","            'interest_industry2' => 'required|string|max:255',","            'interest_industry3' => 'required|string|max:255',","            'interest_function1' => 'required|string|max:255',","            'interest_function2' => 'required|string|max:255',","            'interest_function3' => 'required|string|max:255',","        ];","        ","        // バリデーションの実行","        $request->validate($rules);","","        // モデルを使用してデータを保存","        $interest = new Interest();","        $interest->user_id = auth()->id();","        $interest->interest_industry1 = $request->input('interest_industry1');","        $interest->interest_industry2 = $request->input('interest_industry2');","        $interest->interest_industry3 = $request->input('interest_industry3');","        $interest->interest_function1 = $request->input('interest_function1');","        $interest->interest_function2 = $request->input('interest_function2');","        $interest->interest_function3 = $request->input('interest_function3');","        $interest->save();","","        // リダイレクトまたはレスポンスを返す","        return redirect('/career/create');",""],"id":147}],[{"start":{"row":110,"column":4},"end":{"row":110,"column":8},"action":"remove","lines":["    "],"id":148},{"start":{"row":110,"column":0},"end":{"row":110,"column":4},"action":"remove","lines":["    "]},{"start":{"row":109,"column":8},"end":{"row":110,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":108,"column":25},"end":{"row":108,"column":26},"action":"remove","lines":["/"],"id":149}],[{"start":{"row":108,"column":25},"end":{"row":108,"column":26},"action":"insert","lines":["m"],"id":150},{"start":{"row":108,"column":26},"end":{"row":108,"column":27},"action":"insert","lines":["y"]},{"start":{"row":108,"column":27},"end":{"row":108,"column":28},"action":"insert","lines":["p"]},{"start":{"row":108,"column":28},"end":{"row":108,"column":29},"action":"insert","lines":["a"]},{"start":{"row":108,"column":29},"end":{"row":108,"column":30},"action":"insert","lines":["g"]},{"start":{"row":108,"column":30},"end":{"row":108,"column":31},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":108,"column":31},"end":{"row":108,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":100,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1709216317436,"hash":"08cb2d5f1f686e851338435c40ffd7280b8352bf"}