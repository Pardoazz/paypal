<?php

return[

'client_id' => 'Ae4hqxsyya-mHZJh40Rc11KnvLFD2CCLMxkkgn3NpDxWyfH4Fg1aNO0P371lAMx0JmS5eSiILlRnKOct',
'secret' => 'EBD6eai4sHwHlhNA1w07A4YyXPz4QdEI-Lk2v6BvlDkPIZ1jjHk3lztEcrwNLLGN68tjYuy2_t4cyd5G',
'settings' => [
	'http.CURLOPT_CONNECTTIMEOUT' => 30,
	'mode' => 'sandbox', //live
	'log.LogEnabled' => true,
	'log.FileName' => storage_path().'/logs/paypal.php',
	'log.LogLevel' => 'INFO',	
],

];
