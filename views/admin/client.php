<?php ob_start()?>


<table class="table text-center  table-light">
    <tr class="table-dark">
        <th> image </th>
        <th> Titre </th>
        <th> Nombre de page </th>
        <th colspan="2"> Actions </th>
    </tr>
    <tr>
        <th> image </th>
        <th> Titre </th>
        <th> Nombre de page </th>
        <th colspan="2"> Actions </th>
    </tr>
</table>


<?php
$content = ob_get_clean();
//require "tamplate.php";
?>