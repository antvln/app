<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Sharing UI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/indec.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 10px;
            border-radius: 25px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 60%;
            max-width: 450px;
            border: 2px solid #6c5ce7;
            transition: all 0.3s ease-in-out;
        }
        .search-container input {
            border: none;
            outline: none;
            flex: 1;
            font-size: 1rem;
            padding: 10px;
            border-radius: 20px;
            background: transparent;
            color: #333;
        }
        .search-container button {
            border: none;
            background: #6c5ce7;
            color: #fff;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        .search-container button:hover {
            background: #5a4dbb;
        }
    </style>
</head>
<body>
    
    <nav class="top-bar" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
        <i class="bi bi-person-circle" style="font-size: 2em;"></i>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Cerca...">
            <button onclick="performSearch()">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </nav>
    
    <div class="document-list">
        <div class="document-item">
            <div class="user-info">
                <img src="../foto/profilo.png" alt="Demetrio" class="profile-pic">
                <span class="user-name" style="font-size: 18px;">Demetrio</span>
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
        
        <div class="document-item">
            <div class="user-info">
                <img src="../foto/profilo.png" alt="Giovanni" class="profile-pic">
                <span class="user-name" style="font-size: 18px;">Giovanni</span>
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
    
    <?php
        include 'navbar.php';
    ?>
    
    <script>
        function setActive(selected) {
            document.querySelectorAll('.bottom-nav .nav-item').forEach(item => {
                item.classList.remove('active');
            });
            selected.classList.add('active');
        }

        function performSearch() {
            let query = document.getElementById('searchInput').value;
            alert('Hai cercato: ' + query);
        }
    </script>
</body>
</html>
        