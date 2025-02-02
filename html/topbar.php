
<style>
  /* STILI SPECIFICI PER LA NAVBAR */
  .top-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f8f3f9;
    padding: 10px 15px;
    height: 50px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  .top-nav .profile-icon {
    font-size: 28px;
  }
  .top-nav .search-box {
    flex: 1;
    margin-left: 10px;
    display: flex;
    background: #fff;
    border: 1px solid #6c5ce7;
    border-radius: 20px;
    overflow: hidden;
    max-width: 250px;
  }
  .top-nav .search-box input {
    flex: 1;
    border: none;
    padding: 5px 10px;
    font-size: 1rem;
    outline: none;
  }
  .top-nav .search-box button {
    background: #6c5ce7;
    border: none;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  .top-nav .search-box button:hover {
    background: #5a4dbb;
  }
  
  .bottom-nav {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #f8f3f9;
    box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 60px;
    z-index: 1000;
  }
  .nav-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .nav-item i {
    font-size: 24px;
    transition: transform 0.2s ease, color 0.2s ease;
  }
  .nav-item span {
    font-size: 12px;
    margin-top: 2px;
  }
  .nav-item.active i {
    color: #4b0082;
    font-weight: bold;
  }
  .nav-item:hover i {
    transform: scale(1.1);
    color: #4b0082;
  }

  /* MEDIA QUERIES PER LA NAVBAR */
  @media (max-width: 480px) {
    .top-nav {
      height: 45px;
      padding: 8px 10px;
    }
    .top-nav .profile-icon {
      font-size: 24px;
    }
    .top-nav .search-box {
      max-width: 200px;
      margin-left: 8px;
    }
    .top-nav .search-box input {
      font-size: 0.8rem;
    }
    .top-nav .search-box button {
      width: 35px;
    }
    .bottom-nav {
      height: 55px;
    }
    .nav-item i {
      font-size: 22px;
    }
    .nav-item span {
      font-size: 11px;
    }
  }
  @media (min-width: 481px) and (max-width: 768px) {
    .top-nav {
      height: 50px;
      padding: 10px 15px;
    }
    .top-nav .profile-icon {
      font-size: 26px;
    }
    .top-nav .search-box {
      max-width: 250px;
    }
    .bottom-nav {
      height: 60px;
    }
    .nav-item i {
      font-size: 24px;
    }
    .nav-item span {
      font-size: 12px;
    }
  }
  @media (min-width: 769px) {
    .top-nav {
      height: 60px;
      padding: 15px 20px;
    }
    .top-nav .profile-icon {
      font-size: 32px;
    }
    .top-nav .search-box {
      max-width: 350px;
    }
    .top-nav .search-box input {
      font-size: 1.1rem;
    }
    .bottom-nav {
      height: 70px;
    }
    .nav-item i {
      font-size: 28px;
    }
    .nav-item span {
      font-size: 14px;
    }
  }
</style>

<!-- NAVBAR SUPERIORE -->
<nav class="top-nav">
  <i class="bi bi-person-circle profile-icon"></i>
  <div class="search-box">
    <input type="text" placeholder="Cerca..." id="searchInput">
    <button onclick="performSearch()">
      <i class="bi bi-search"></i>
    </button>
  </div>
</nav>

<!-- NAVBAR INFERIORE -->
<nav class="bottom-nav">
  <div class="nav-item" onclick="setActive(this)">
    <i class="bi bi-geo-alt"></i>
    <span>Explore</span>
  </div>
  <div class="nav-item" onclick="setActive(this)">
    <i class="bi bi-bookmark"></i>
    <span>Saved</span>
  </div>
  <div class="nav-item" onclick="setActive(this)">
    <i class="bi bi-bell"></i>
    <span>Updates</span>
  </div>
</nav>

<script>
  function setActive(selected) {
    document.querySelectorAll('.bottom-nav .nav-item').forEach(item => {
      item.classList.remove('active');
    });
    selected.classList.add('active');
  }
  function performSearch() {
    const query = document.getElementById('searchInput').value;
    alert("Hai cercato: " + query);
  }
</script>
