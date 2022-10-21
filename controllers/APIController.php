<?php

namespace Controllers;

use Model\Servicio;
use Model\Cita;
use Model\CitaServicio;

class APIController
{
    public static function index()
    {
        $servicios = Servicio::all();
        echo "Prueba";
        echo json_encode($servicios);
    }

    public static function guardar()
    {

        //Almacena la cita y devuelve el ID
        $cita = new Cita($_POST);

        $resultado = $cita->guardar();

        $id = $resultado['id'];

        //Almacena la cita y el servicio

        $idServicios = explode(",", $_POST['servicios']); //Separo los datos del arreglo que tengan una coma

        foreach ($idServicios as $idServicios) {
            $args = [
                'idCita' => $id,
                'idServicio' => $idServicios
            ];
            $citaServicio = new CitaServicio($args);

            $citaServicio->guardar();
        }

        //Retornamos una resultado
        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $cita = Cita::find($id);
            $cita->eliminar();

            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
}
