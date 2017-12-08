<?php

$classpaths  = array(
    'admin/router/router.php'
);

foreach($classpaths as $classpath) {
    include(ABSPATH.$classpath);
}