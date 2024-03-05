{"filter":false,"title":"2024_02_25_085500_create_interests_table.php","tooltip":"/cms/database/migrations/2024_02_25_085500_create_interests_table.php","undoManager":{"mark":19,"position":19,"stack":[[{"start":{"row":14,"column":0},"end":{"row":15,"column":33},"action":"remove","lines":["            $table->id();","            $table->timestamps();"],"id":2},{"start":{"row":14,"column":0},"end":{"row":18,"column":25},"action":"insert","lines":["    $table->id('interest_id');","    $table->foreignId('user_id')->constrained()->onDelete('cascade');","    $table->string('interest_industry')->nullable();","    $table->string('interest_function')->nullable();","    $table->timestamps();"]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":3},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":4},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":58},"end":{"row":17,"column":59},"action":"remove","lines":[")"],"id":5},{"start":{"row":17,"column":57},"end":{"row":17,"column":58},"action":"remove","lines":["("]},{"start":{"row":17,"column":56},"end":{"row":17,"column":57},"action":"remove","lines":["e"]},{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"remove","lines":["l"]},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["b"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":["a"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":["l"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":["l"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["u"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["n"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":[">"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["-"]}],[{"start":{"row":16,"column":58},"end":{"row":16,"column":59},"action":"remove","lines":[")"],"id":6},{"start":{"row":16,"column":57},"end":{"row":16,"column":58},"action":"remove","lines":["("]},{"start":{"row":16,"column":56},"end":{"row":16,"column":57},"action":"remove","lines":["e"]},{"start":{"row":16,"column":55},"end":{"row":16,"column":56},"action":"remove","lines":["l"]},{"start":{"row":16,"column":54},"end":{"row":16,"column":55},"action":"remove","lines":["b"]},{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"remove","lines":["a"]},{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"remove","lines":["l"]},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"remove","lines":["l"]},{"start":{"row":16,"column":50},"end":{"row":16,"column":51},"action":"remove","lines":["u"]},{"start":{"row":16,"column":49},"end":{"row":16,"column":50},"action":"remove","lines":["n"]},{"start":{"row":16,"column":48},"end":{"row":16,"column":49},"action":"remove","lines":[">"]},{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"remove","lines":["-"]}],[{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":["1"],"id":7}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["            $table->string('interest_industry1');",""],"id":8}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["            $table->string('interest_industry1');",""],"id":9}],[{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"remove","lines":["1"],"id":10}],[{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"insert","lines":["2"],"id":11}],[{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"remove","lines":["1"],"id":12}],[{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"insert","lines":["3"],"id":13}],[{"start":{"row":19,"column":45},"end":{"row":19,"column":46},"action":"insert","lines":["1"],"id":14}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["            $table->string('interest_function1');",""],"id":15}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["            $table->string('interest_function1');",""],"id":16}],[{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"remove","lines":["1"],"id":17}],[{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"insert","lines":["2"],"id":18}],[{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"remove","lines":["1"],"id":19}],[{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"insert","lines":["3"],"id":20}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":38},"action":"remove","lines":["            $table->id('interest_id');"],"id":21},{"start":{"row":14,"column":0},"end":{"row":14,"column":64},"action":"insert","lines":["            $table->bigIncrements('id'); // プライマリキーのカラム名を'id'に変更"]}]]},"ace":{"folds":[],"scrolltop":33.000000000000036,"scrollleft":19.799999999999997,"selection":{"start":{"row":13,"column":33},"end":{"row":13,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1709206741492,"hash":"a4b21ee9b489a7eb529a43cdb52c7d4e1a601cbd"}