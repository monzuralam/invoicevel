<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="<?php echo route('dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-people"></i><span>Clients</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i><span>Invoices</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo route('invoices'); ?>">
                        <i class="bi bi-circle"></i><span>All Invoices</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Recurring invoices</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo route('invoice-create'); ?>">
                        <i class="bi bi-circle"></i><span>Create invoice</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-gear"></i><span>Settings</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->
