<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 2019-04-04
 * Time: 12:01
 */

route::get('/', function (){
    return view(welcome);
});


?>
<body>
@yield('content')
</body>
