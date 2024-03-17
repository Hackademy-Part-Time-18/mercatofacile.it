<div class="w-full md:w-1/12 bg-gray-50">
    <div id='sideMenu' class=" md:w-1/3 hover:w-full h-full bg-white transition-all duration-300">
        <ul class="flex items-center justify-between md:justify-normal md:block ms-2 pt-4">
            <li class="md:mb-10 relative">
                <a wire:navigate href="{{ route('dashboard.crea') }}">
                    <i
                        class="{{ request()->is('dashboard/crea') ? 'text-green-500' : '' }} fa-solid fa-plus ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i>
                </a>
                <span class="absolute opacity-0 text-sm ps-1 text-gray-700 top-1">Nuovo annuncio</span>
            </li>
            <li class="md:mb-10 relative"><i
                    class="fa-solid fa-dollar-sign text-2xl md:p-2 hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 ps-1 text-sm text-gray-700 top-3">Vendite</span></li>
            <li class="md:mb-10 relative"><i
                    class="fa-solid fa-tag size-8 ps-1 text-2xl hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 ps-1 text-sm text-gray-700 top-1">Acquisti</span></li>
            <li class="md:mb-10 relative">
                <a wire:navigate href="{{ route('dashboard.stats') }}"><i
                        class="{{ request()->is('dashboard/statistiche') ? 'text-green-500' : '' }} fa-solid ps-1 size-8 fa-chart-simple text-2xl hover:rotate-12 duration-300"></i></a>
                <span class="absolute opacity-0 ps-1 text-sm text-gray-700 top-1">Statistiche</span>
            </li>

            <li class="md:mb-10 relative">
                <a wire:navigate
                    href="{{ Auth::user()->is_revisor ? route('dashboard.revisiona') : route('become.revisor') }}"><i
                        class="{{ request()->is('dashboard/revisiona') ? 'text-green-500' : '' }} fa-solid fa-user-tie ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i></a>
                <span
                    class="absolute opacity-0 text-sm ps-1 text-gray-700 top-1">{{ Auth::user()->is_revisor ? 'revisiona annunci' : 'diventa revisore' }}</span>
            </li>

            <li class="md:mb-10 relative">
                <a wire:navigate href="{{ route('dashboard.notifications') }}">
                    <i class="{{ request()->is('dashboard/notifiche') ? 'text-green-500' : '' }} fa-solid fa-envelope ps-1 size-8 text-2xl hover:rotate-12 duration-300 relative">
                        <span class="text-center absolute top-[-10px] right-[-5px] size-4 rounded-full bg-red-500 text-white text-sm">{{$notificationCount}}</span>
                    </i>
                </a>
                <span class="absolute opacity-0 text-sm ps-1 top-1">Le tue notifiche</span>
            </li>

            <li class="md:mb-10 relative text-yellow-500"><i
                    class="fa-solid fa-face-grin-stars ps-1 size-8 text-2xl hover:rotate-12 duration-300"></i><span
                    class="absolute opacity-0 text-sm ps-1 top-1 text-yellow-500">Abbonamento premium</span></li>

        </ul>
    </div>
</div>
