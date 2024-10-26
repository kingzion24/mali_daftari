<div class="space-y-4">
    <h2 class="text-lg font-bold text-white dark:text-gray-200 text-center">DASHBOARD</h2>
    <ul class="space-y-4">
        <li>
            <a href="{{ route('dashboard') }}" 
               class="block px-4 py-2 text-sm font-medium text-white dark:text-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-300 dark:bg-gray-700' : 'hover:bg-gray-400 dark:hover:bg-gray-500' }} rounded">
                Overview
            </a>
        </li>
        <li>
            <a href="{{ route('sales') }}" 
               class="block px-4 py-2 text-sm font-medium text-white dark:text-gray-200 {{ request()->routeIs('sales') ? 'bg-gray-300 dark:bg-gray-700' : 'hover:bg-gray-400 dark:hover:bg-gray-500' }} rounded">
                Sales
            </a>
        </li>
        <li>
            <a href="{{ route('inventory.index') }}" 
               class="block px-4 py-2 text-sm font-medium text-white dark:text-gray-200 {{ request()->routeIs('inventory.index') ? 'bg-gray-300 dark:bg-gray-700' : 'hover:bg-gray-400 dark:hover:bg-gray-500' }} rounded">
                Inventory
            </a>
        </li>
        <li>
            <a href="{{ route('expenses') }}" 
               class="block px-4 py-2 text-sm font-medium text-white dark:text-gray-200 {{ request()->routeIs('expenses') ? 'bg-gray-300 dark:bg-gray-700' : 'hover:bg-gray-400 dark:hover:bg-gray-500' }} rounded">
                Expenses
            </a>
        </li>
    </ul>
</div>
