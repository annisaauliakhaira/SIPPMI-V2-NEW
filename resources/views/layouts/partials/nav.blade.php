<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="{{ asset('assets/brand/coreui-pro-base-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ asset('assets/brand/coreui-signet-white.svg') }}" width="118"
             height="46" alt="CoreUI Logo">
    </div>

    <ul class="c-sidebar-nav" data-drodpown-accordion="true">

        <x-sidebar-nav-link icon="cil-speedometer" url="{{ route('home') }}">
            Dashboard<span class="badge badge-info">NEW</span>
        </x-sidebar-nav-link>


        @canany(['roles_access', 'prodi_access'])

            <li class="c-sidebar-nav-title">Master</li>


            @can('roles_access')
                <x-sidebar-nav-link icon="cil-user-follow" url="{{ route('backend.roles.index') }}">
                    Role Permission
                </x-sidebar-nav-link>
            @endcan

            {{-- @can('prodi_access')
                <x-sidebar-nav-link icon="cil-bank" url="{{ route('backend.departments.index') }}">
                    Prodi
                </x-sidebar-nav-link>
            @endcan --}}

        @endcanany

        @canany(['penelitian_manage','penelitian_access']) 
            {{-- <li class="c-sidebar-nav-title">Penelitian</li> --}}
            @can('penelitian_access')
                <x-sidebar-nav-link icon="cil-address-book" url="{{ route('frontend.penelitian.index') }}">
                    Penelitian
                </x-sidebar-nav-link>
            @endcan
        @endcanany

        @canany(['pengabdian_access']) 
            {{-- <li class="c-sidebar-nav-title">Pengabdian</li> --}}
            @can('pengabdian_access')
            <x-sidebar-nav-link icon="cil-address-book" url="{{ route('frontend.penelitian.index') }}">
                Pengabdian
            </x-sidebar-nav-link>
            @endcan
        @endcanany

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler"
            type="button"
            data-target="_parent"
            data-class="c-sidebar-unfoldable"></button>
</div>
