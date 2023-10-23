<aside class="mt-4 sidebar-menu">
    <ul>
        <li class="mb-1 group active">
            <a
                href="{{route('admin.dashboard')}}"
                class="side-menu-links group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a
                href="{{route('admin.dashboard')}}"
                class="side-menu-links sidebar-dropdown-toggle">
                <i class="ri-file-list-2-line mr-3 text-lg"></i>
                <span class="text-sm">Manage Logs</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">View Logs</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a
                href="{{route('admin.dashboard')}}"
                class="side-menu-links sidebar-dropdown-toggle">
                <i class="ri-school-line mr-3 text-lg"></i>
                <span class="text-sm">Manage Sites</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">View Sites</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a
                href="#"
                class="side-menu-links sidebar-dropdown-toggle">
                <i class="ri-apps-2-line mr-3 text-lg"></i>
                <span class="text-sm">Applications</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">Mail</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">Mail Application</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a
                href="{{route('admin.dashboard')}}"
                class="side-menu-links sidebar-dropdown-toggle">
                <i class="ri-tools-line mr-3 text-lg"></i>
                <span class="text-sm">Manage Settings</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">Mail Settings</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">Site Settings</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="side-menu-sub-links">
                        <span class="text-sm">Error Log Settings</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
