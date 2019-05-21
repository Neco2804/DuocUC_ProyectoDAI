<$php

    include('connect.php');
    include('Models\commune.php');

    $comuna = new Commune('Maipú');
    $comuna->save();
    echo $comuna->COD_NAME_COMM;

?>