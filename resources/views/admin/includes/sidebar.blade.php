
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-user-circle" aria-hidden="true"></i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-list-ol" aria-hidden="true"></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-clipboard" aria-hidden="true"></i>
                    <p>Post</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-tags" aria-hidden="true"></i>
                    <p>Tag</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"> <!-- todo add route and check -->
                    <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                    <p>Role</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"> <!-- todo add route and check -->
                    <i class="nav-icon fa fa-check-square" aria-hidden="true"></i>
                    <p>Permission</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
