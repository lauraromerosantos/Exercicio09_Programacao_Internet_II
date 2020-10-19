<?php

header("Content-type: application/xml; charset=UTF-8");
$conn = mysqli_connect("localhost","root"," ","api_rest");

    if($conn){
        $result = mysqli_query($conn, "SELECT * FROM tbl_disciplina");

        $xml = '<?xml version="1.0" encoding="UTF-8" ?>';
        $xml .= '<lista_disciplina>';

        while($materia = mysqli_fetch_array($result)){
            $xml .= '<materia>';
            $xml .= '       <disciplina>'.$materia["Disciplina"].'</disciplina>';
            $xml .= '       <professor>'.$materia["Professor"].'</professor>';
            $xml .= '       <semestre>'.$materia["Semestre"].'</semestre>';
            $xml .= '</materia>';
        }

        $xml .= '</lista_disciplina>';

        echo $xml;
    }
?>