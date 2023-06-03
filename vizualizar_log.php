<?php
  
  $logFile = 'C:\Users\vinic\OneDrive\Pastas\Projetos\Projeto 6 - Validador de Formulário\log.txt';
  $logContent = file_get_contents($logFile);

 
  $logArray = explode("\n", $logContent);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Visualizar Log</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Log de Formulário</h1>

  <table>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Data e Hora</th>
    </tr>
    <?php foreach ($logArray as $logEntry): ?>
      <?php if (!empty($logEntry)): ?>
        <?php $entryData = json_decode($logEntry, true); ?>
        <tr>
          <td><?php echo $entryData['name']; ?></td>
          <td><?php echo $entryData['email']; ?></td>
          <td><?php echo date('Y-m-d H:i:s', $entryData['timestamp']); ?></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>
