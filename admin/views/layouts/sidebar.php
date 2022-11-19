
 <!-- ======= Sidebar ======= -->
  <base href='http://localhost:9000/admin/' />
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="views/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard - <?php echo($_SESSION['current_user']['name']);?></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="views/articles/index.php">
          <i class="bi bi-journal-text"></i><span>Articles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed"   href="views/application/index.php">
          <i class="bi bi-journal-text"></i><span>Applications</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"   href="views/users/index.php">
          <i class="bi bi-journal-text"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"   href="calendar/index.php">
          <i class="bi bi-journal-text"></i><span>Calendar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        
      </li>
      
  </aside>
