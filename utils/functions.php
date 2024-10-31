<?php
    function renderGraduateTable($graduates, $degrees) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre y Apellido<th>";
        echo "<th>Matricula<th>";
        echo "<th>Carrera<th>";
        echo "<th>Correo electrónico<th>";
        echo "<th>Teléfono<th>";
        echo "<th>Estado<th>";
        echo "</tr>";
        foreach($graduates as $graduate) {
            echo "<tr>";
            echo "<td>".$graduate["full_name"]."<td>";
            echo "<td>".$graduate["student_number"]."<td>";
            echo "<td>".findElementById($degrees, $graduate["degree_id"])["name"]."<td>";
            echo "<td>".$graduate["email"]."<td>";
            echo "<td>".$graduate["phone"]."<td>";
            echo "<td>".$graduate["status"]."<td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    function findElementById ($arreglo, $id) {
        foreach ($arreglo as $elemento) {
            if ($elemento["id"] == $id) {
                return $elemento;
            }
        }
        return null;
    }
?>