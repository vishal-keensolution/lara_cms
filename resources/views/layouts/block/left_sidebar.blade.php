<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p> Dashboard </p>
        </a>
      </li><br>
 
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            User - Manager
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/role')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Role</p>
            </a>
          </li>
        </ul>
      </li>
         <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Post - Manager
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Posts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/role')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
        </ul>
      </li>
         <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Page - Manager
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pages</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/role')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
        </ul>
      </li>
 
    </ul>
  </nav>
