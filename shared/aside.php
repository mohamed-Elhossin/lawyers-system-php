<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="/hima/">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->




    <li class="nav-heading">Pages</li>
    <?php if ($_SESSION['role'] == 0 || $_SESSION['role']  == 1) : ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <span>lawyers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/hima/lawyers/add.php">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
          </li>
          <li>
            <a href="/hima/lawyers/list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    <?php endif; ?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#articles" data-bs-toggle="collapse" href="#">
        <span>articles</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="articles" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/hima/articles/add.php">
            <i class="bi bi-circle"></i><span>Add </span>
          </a>
        </li>
        <li>
          <a href="/hima/articles/list.php">
            <i class="bi bi-circle"></i><span>List</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->
    <?php if ($_SESSION['role'] == 0) : ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admin" data-bs-toggle="collapse" href="#">
          <span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admin" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/hima/admin/add.php">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
          </li>
          <li>
            <a href="/hima/admin/list.php">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    <?php endif; ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.php">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/hima/pages-login.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->
  </ul>
</aside><!-- End Sidebar-->