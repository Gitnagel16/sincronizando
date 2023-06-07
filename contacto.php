<?php

$persona = [
              "nombre" => "Jorge",
              "apellido" => "Nagel",
              "edad" => 29
          ];
  

          foreach ($persona as $valor) {
              echo "$valor <br>";
          }
?>




$auto = [
              "marca" => "Fiat",
              "modelo" => "Cronos",
              "año" => 2023
          ];
  

          foreach ($auto as $posicion => $valor) {
              echo "$posicion: $valor <br>";
          }



