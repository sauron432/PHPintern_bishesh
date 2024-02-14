<head>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<x-app-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Posts') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    @include ('sweetalert::alert')
    <table id="postTable" class="text-white">
        <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Description</th>
        </thead>
        <tbody>
            @php
            $serialNumber = 1;
            @endphp
            @foreach ($posts as $post)
            <tr>
                <th>{{ $serialNumber++ }}</th>
                <th>{{ $post->title }}</th>
                <th>{{ $post->description }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
<script src=""></script>