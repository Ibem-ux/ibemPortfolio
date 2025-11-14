<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
* {
  margin: 0;
  padding: 0;
  border: 0;
}

/* === Hamburger Button === */
.hamburger {
  font-size: 28px;
  cursor: pointer;
  color: #00ff66;
  transition: transform 0.2s ease;
  position: absolute;
  top: 5px;
  left: 100px;
  z-index: 1000;
}

.hamburger:hover {
  transform: scale(1.2);
}

/* === Popup Menu === */
.popup-menu {
  display: none;
  position: absolute;
  top: 60px;
  left: 40px;
  background: rgba(0, 0, 0, 0.95);
  border: 2px solid #00ff66;
  border-radius: 10px;
  padding: 15px 20px;
  width: 200px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.popup-menu p {
  color: #00ff66;
  font-weight: bold;
  margin-bottom: 10px;
  font-size: 16px;
  text-align: left; /* ← make text align to the left */
  padding-left: -2px;
  margin-left:0;
}


.logout-btn {
  display: block;
  background: #ff4444;
  border: none;
  color: white;
  padding: 10px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
  width: 100%;
  text-align: center;
  text-decoration: none;
}

.logout-btn:hover {
  background: #ff0000;
}
</style>


<div class="hamburger" onclick="toggleMenu()">☰</div>

<div class="popup-menu" id="popupMenu">
  <?php
  
  if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
      $fullName = htmlspecialchars($_SESSION['fname'] . " " . $_SESSION['lname']);
      echo "<p>👤 $fullName</p>";
      echo '<form action="logout.php" method="post">
              <button type="submit" class="logout-btn">Logout</button>
            </form>';
  } else {
      echo '<p>Guest</p>';
      echo '<a href="../../../index.php" class="logout-btn">Login</a>';
  }
  ?>
</div>

<script>
// === Show/Hide Popup Menu ===
function toggleMenu() {
  const menu = document.getElementById('popupMenu');
  menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

// === Hide Menu When Clicking Outside ===
window.addEventListener('click', function(e) {
  const menu = document.getElementById('popupMenu');
  const hamburger = document.querySelector('.hamburger');
  if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
    menu.style.display = 'none';
  }
});
</script>
