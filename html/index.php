<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Document Sharing UI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    /* RESET GLOBALE */
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      width: 100%;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      background: #f5f5f5;
    }
    /* CONTAINER CENTRATO */
    .container {
      width: 100%;
      max-width: 480px;
      margin: 0 auto;
      padding-bottom: 80px; /* per evitare che il contenuto venga coperto dalla navbar inferiore */
    }
    /* STILI PER IL CONTENUTO DELLA PAGINA */
    .document-list {
      padding: 15px;
    }
    .document-item {
      margin-bottom: 20px;
    }
    .user-info {
      display: flex;
      align-items: center;
      margin-bottom: 8px;
      padding-left: 15px;
    }
    .user-info img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 1px solid #ddd;
    }
    .user-info .name {
      margin-left: 10px;
      font-size: 0.9rem;
      font-weight: 500;
    }
    .document-card {
      background: #ECE6F0;
      border-radius: 15px;
      margin: 0 15px;
      padding: 10px;
    }
    .document-card h3 {
      font-size: 1rem;
      margin-bottom: 5px;
    }
    .document-card p {
      font-size: 0.9rem;
      color: #555;
      margin-bottom: 10px;
    }
    .actions {
      display: flex;
    gap: 20px;
    justify-content: flex-end;
    }
    .actions i {
      font-size: 24px;
      cursor: pointer;
      transition: transform 0.2s ease, color 0.2s ease;
    }
    .actions i:hover {
      transform: scale(1.1);
      color: #4b0082;
    }
    /* Puoi includere qui anche le media query per il contenuto se necessario */
  </style>
</head>
<body>
  <div class="container">
    <!-- INCLUSIONE DELLA NAVBAR -->
    <?php include 'topbar.php'; ?>

    <!-- CONTENUTO DELLA PAGINA -->
    <div class="document-list">
      <!-- Documento 1 -->
      <div class="document-item">
        <div class="user-info">
          <img src="../foto/profilo.png" alt="Demetrio">
          <span class="name">Demetrio</span>
        </div>
        <div class="document-card">
          <h3>Documento.pdf</h3>
          <p>DESCRIZIONE DOCUMENTO CONDIVISO.</p>
          <div class="actions">
            <i class="bi bi-download"></i>
            <i class="bi bi-heart"></i>
          </div>
        </div>
      </div>
      <!-- Documento 2 -->
      <div class="document-item">
        <div class="user-info">
          <img src="../foto/profilo.png" alt="Giovanni">
          <span class="name">Giovanni</span>
        </div>
        <div class="document-card">
          <h3>Documento.pdf</h3>
          <p>DESCRIZIONE DOCUMENTO CONDIVISO.</p>
          <div class="actions">
            <i class="bi bi-download"></i>
            <i class="bi bi-heart"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
