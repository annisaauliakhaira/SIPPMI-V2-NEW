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


        @canany(['roles_access', 'prodi_access','fakultas_access','fakultas_manage','prodi_manage','skema_manage','skema_access'])

            <li class="c-sidebar-nav-title">Master</li>

            @can('roles_access')
                <x-sidebar-nav-link icon="fi-rr-shield-check" data-turbolinks-action="replace" url="{{ route('backend.roles.index') }}">
                    Role Permission
                </x-sidebar-nav-link>
            @endcan

            <x-sidebar-nav-link icon="fi-rr-graduation-cap" url="{{ route('backend.dosen.index') }}" data-turbolinks-action="replace">
                Dosen
            </x-sidebar-nav-link>

            <x-sidebar-nav-link icon="fi-rr-building" url="{{ route('backend.fakultas.index') }}">
                Fakultas
            </x-sidebar-nav-link>

            <x-sidebar-nav-link url="{{ route('backend.prodi.index') }}" icon="fi-rr-building">
                Prodi
            </x-sidebar-nav-link>
            <x-sidebar-nav-link icon="fi-rr-info" url="{{ route('backend.jenis_output.index') }}">
                Jenis Output Penelitian
            </x-sidebar-nav-link>
            <x-sidebar-nav-link icon="fi-rr-list-check" url="{{ route('backend.skema_penelitian.index') }}">
                Skema Penelitian
            </x-sidebar-nav-link>
            <x-sidebar-nav-link icon="fi-rr-users" url="{{ route('backend.reviewer.index') }}">
                Reviewer
            </x-sidebar-nav-link>
        @endcanany

        @canany(['penelitian_manage','penelitian_access'])
        <li class="c-sidebar-nav-title">Penelitian</li>
            @can('penelitian_access')    
                <x-sidebar-nav-link icon="fi-rr-book-alt" url="{{ route('frontend.penelitian.index') }}">
                    Data Penelitian Dosen
                </x-sidebar-nav-link>
            @endcan

            @can('penelitian_manage')
                <x-sidebar-nav-link icon="fi-rr-book-alt" url="{{ route('backend.penelitian.index') }}">
                    Data Penelitian Admin
                </x-sidebar-nav-link>
            @endcan

            <x-sidebar-nav-link icon="fi-rr-form" url="{{ route('frontend.review_penelitian.index') }}">
                Review Penelitian
            </x-sidebar-nav-link>
        @endcanany

        @canany(['pengabdian_access'])
            {{-- <li class="c-sidebar-nav-title">Pengabdian</li> --}}
            @can('pengabdian_access')
            {{-- <x-sidebar-nav-link icon="fi-rr-book-alt" url="{{ route('frontend.penelitian.index') }}">
                Pengabdian
            </x-sidebar-nav-link> --}}
            @endcan
        @endcanany

   

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler"
            type="button"
            data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
