<div>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('livewire.dashboard.computer-side-bar')
        @include('livewire.dashboard.mobile-side-bar')
        
        
        <div class="flex flex-col flex-1 w-full">
            <livewire:dashboard.header />

            @if ($mode === 'adminka')
                <livewire:dashboard.main-container.page-adminka.main />
            @elseif ($mode === 'main')
                <livewire:dashboard.main-container.page_dashboard.main />
            @else
            <livewire:not_found_404 />                
            @endif
        </div>
    </div>
</div>