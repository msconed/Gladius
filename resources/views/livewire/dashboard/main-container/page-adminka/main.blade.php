<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
    <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Статистика сервера
            </h3>
    <livewire:dashboard.main-container.page-dashboard.server-info />
    </div>

    <livewire:dashboard.main-container.page-adminka.server-management />

    <livewire:dashboard.main-container.page-adminka.donat-items-form />
    @if (false)
    <livewire:dashboard.main-container.page-adminka.findplayers />
    @endif
    
</main>
