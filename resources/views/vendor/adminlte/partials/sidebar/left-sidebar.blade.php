<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        @if (Auth::user()->role == "karyawan")
        <nav class="nav flex-column mt-2">
            <a class="nav-link bg-info mb-2 active" href="{{ route('cuti.index') }}">Pengajuan Cuti</a>
            {{-- <a class="nav-link bg-info mb-2" href="#">Link</a>
            <a class="nav-link bg-info mb-2" href="#">Link</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
          </nav>
        @endif
        @if (Auth::user()->role == 'super admin')


        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}

                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')



            </ul>
        </nav>
        @endif

        @if (Auth::user()->role == "staf hr")
        <nav class="nav flex-column mt-2">
            <a class="nav-link bg-info mb-2 active" href="{{ route('karyawan.index') }}">Manage Karyawan</a>
            <a class="nav-link bg-info mb-2" href="{{ route('cuti.index') }}">Cuti Karyawan</a>
            {{-- <a class="nav-link bg-info mb-2" href="#">Link</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
          </nav>
        @endif
    </div>

</aside>
