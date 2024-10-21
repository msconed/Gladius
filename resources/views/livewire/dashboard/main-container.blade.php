<div>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('livewire.dashboard.computer-side-bar')
        @include('livewire.dashboard.mobile-side-bar')
        
        
        <div class="flex flex-col flex-1 w-full">
            <livewire:dashboard.header />

            @if ($page_id === 'dashboard.main')
                <livewire:dashboard.main-container.page_dashboard.main />
            @elseif ($page_id === 'dashboard.adminka')
                <livewire:dashboard.main-container.page-adminka.donat-items-form />
            @else
                <livewire:dashboard.main-container.page_bans.main />
            @endif
        </div>
    </div>
</div>