<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{__('Posts')}}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <table id='postTable' class='text-white'>
        <thead>
            <th>SN</th>
        </thead>

    </table>
</x-guest-layout>
