<?<?php
  // Configurar encabezado JSON
  header('Content-Type: application/json');

  // Iniciar sesión para obtener el idPersona
  session_start();

  // Inicializar respuesta
  $response = [];

  // Verificar que el idPersona esté en la sesión
  if (!isset($_SESSION["idPersona"])) {
      $response['status'] = 'error';
      $response['message'] = 'No se encontró el idPersona en la sesión.';
      echo json_encode($response);
      exit;
  }

  // Obtener el idPersona desde la sesión
  $idPersona = $_SESSION["idPersona"];

  // Incluir archivo de conexión a la base de datos
  include("../Php/BD.php");

  // Verificar conexión
  if (!$conn) {
      $response['status'] = 'error';
      $response['message'] = 'No se pudo conectar a la base de datos.';
      echo json_encode($response);
      exit;
  }

  try {
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Obtener los registros de experiencia laboral
      $stmt = $conn->prepare("SELECT * FROM experiencia_laboral WHERE idPersona = :idPersona AND vigente = 0");
      $stmt->execute([':idPersona' => $idPersona]);
      $experiencias = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Verificar si se encontraron experiencias
      if ($experiencias) {
          $response['status'] = 'success';
          $response['data'] = $experiencias;  // Devolver los registros encontrados
      } else {
          $response['status'] = 'error';
          $response['message'] = 'No se encontraron registros de experiencia laboral.';
      }

  } catch (PDOException $e) {
      // Manejar errores de la base de datos
      $response['status'] = 'error';
      $response['message'] = 'Error al obtener los datos: ' . $e->getMessage();
  }

  // Enviar la respuesta como JSON
  echo json_encode($response);
  ?>
