
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

<style>
.bottom-nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 12px;
    background-color: #f8f3f9;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
    border-top: 1px solid #ddd;
}

.nav-item {
    text-align: center;
    padding: 10px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.nav-item i {
    font-size: 22px;
    color: #6a0dad;
    transition: color 0.3s ease-in-out;
}

.nav-item span {
    display: block;
    font-size: 14px;
    margin-top: 5px;
    color: #333;
}

.nav-item.active i {
    color: #4b0082;
    font-weight: bold;
}

.nav-item:hover i {
    color: #4b0082;
    transform: scale(1.1);
}
</style>