<?php

$classpaths  = array(
    'admin/router/router.php',
    'admin/database/database.php'
);

foreach($classpaths as $classpath) {
    include(ABSPATH.$classpath);
}