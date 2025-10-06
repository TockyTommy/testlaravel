<x-layout>
    <x-slot:title>All Records</x-slot:title>

    <div class="max-w-3xl mx-auto mt-10">
        <a href="{{ route('home') }}" class="btn btn-outline btn-sm mb-4">← Back to Home</a>

        <h1 class="text-2xl font-bold mb-6">All Submitted Records</h1>

        @if ($infos->isEmpty())
            <p class="text-base-content/60">No records found yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $info)
                            <tr>
                                <td>{{ $info->id }}</td>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->age }}</td>
                                <td>{{ $info->phonenumber }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-layout>
