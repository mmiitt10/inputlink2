{"filter":false,"title":"User.php","tooltip":"/cms/app/Models/User.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":43,"column":6},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":4},"end":{"row":45,"column":0},"action":"insert","lines":["",""]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":45,"column":4},"end":{"row":61,"column":5},"action":"insert","lines":["    // ユーザーに紐づくプロフィールを取得","    public function profile()","    {","        return $this->hasOne(Profile::class, 'user_id');","    }","","    // ユーザーに紐づく興味・関心を取得","    public function interests()","    {","        return $this->hasMany(Interest::class, 'user_id');","    }","","    // ユーザーに紐づくキャリアを取得","    public function careers()","    {","        return $this->hasMany(Career::class, 'user_id');","    }"],"id":3}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":46,"column":26},"end":{"row":46,"column":27},"action":"remove","lines":["e"],"id":6},{"start":{"row":46,"column":25},"end":{"row":46,"column":26},"action":"remove","lines":["l"]},{"start":{"row":46,"column":24},"end":{"row":46,"column":25},"action":"remove","lines":["i"]},{"start":{"row":46,"column":23},"end":{"row":46,"column":24},"action":"remove","lines":["f"]},{"start":{"row":46,"column":22},"end":{"row":46,"column":23},"action":"remove","lines":["o"]},{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"remove","lines":["r"]},{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"remove","lines":["p"]}],[{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"insert","lines":["U"],"id":7},{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"insert","lines":["i"]},{"start":{"row":46,"column":22},"end":{"row":46,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":46,"column":22},"end":{"row":46,"column":23},"action":"remove","lines":["n"],"id":8},{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"remove","lines":["i"]},{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"remove","lines":["U"]}],[{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"insert","lines":["u"],"id":9},{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"insert","lines":["i"]},{"start":{"row":46,"column":22},"end":{"row":46,"column":23},"action":"insert","lines":["n"]},{"start":{"row":46,"column":23},"end":{"row":46,"column":24},"action":"insert","lines":["f"]},{"start":{"row":46,"column":24},"end":{"row":46,"column":25},"action":"insert","lines":["o"]}],[{"start":{"row":48,"column":35},"end":{"row":48,"column":36},"action":"remove","lines":["e"],"id":10},{"start":{"row":48,"column":34},"end":{"row":48,"column":35},"action":"remove","lines":["l"]},{"start":{"row":48,"column":33},"end":{"row":48,"column":34},"action":"remove","lines":["i"]},{"start":{"row":48,"column":32},"end":{"row":48,"column":33},"action":"remove","lines":["f"]},{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"remove","lines":["o"]},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"remove","lines":["r"]},{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"remove","lines":["P"]}],[{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"insert","lines":["U"],"id":11},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"insert","lines":["i"]},{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"insert","lines":["n"]},{"start":{"row":48,"column":32},"end":{"row":48,"column":33},"action":"insert","lines":["f"]},{"start":{"row":48,"column":33},"end":{"row":48,"column":34},"action":"insert","lines":["o"]}],[{"start":{"row":52,"column":28},"end":{"row":52,"column":29},"action":"remove","lines":["s"],"id":14}],[{"start":{"row":58,"column":26},"end":{"row":58,"column":27},"action":"remove","lines":["s"],"id":15}],[{"start":{"row":54,"column":28},"end":{"row":54,"column":29},"action":"remove","lines":["y"],"id":16},{"start":{"row":54,"column":27},"end":{"row":54,"column":28},"action":"remove","lines":["n"]},{"start":{"row":54,"column":26},"end":{"row":54,"column":27},"action":"remove","lines":["a"]},{"start":{"row":54,"column":25},"end":{"row":54,"column":26},"action":"remove","lines":["M"]}],[{"start":{"row":54,"column":25},"end":{"row":54,"column":26},"action":"insert","lines":["O"],"id":17},{"start":{"row":54,"column":26},"end":{"row":54,"column":27},"action":"insert","lines":["n"]},{"start":{"row":54,"column":27},"end":{"row":54,"column":28},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":46,"column":26},"end":{"row":46,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1709211641761,"hash":"e1a9b43883ee809d13dd238da1d349114945152c"}