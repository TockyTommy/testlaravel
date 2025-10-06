<x-layout>
    <x-slot:title>Details</x-slot:title>

    <div class="max-w-xl mx-auto mt-10">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-2xl font-bold mb-4">Submitted Details</h1>

                <div class="space-y-2">
                    <div><span class="font-semibold">Name:</span> {{ $info->name }}</div>
                    <div><span class="font-semibold">Age:</span> {{ $info->age }}</div>
                    <div><span class="font-semibold">Phone:</span> {{ $info->phonenumber }}</div>
                </div>

                <div class="mt-6 flex gap-3">
                    <a href="{{ route('infos.create') }}" class="btn btn-primary">Create Another</a>
                    <a href="{{ route('home') }}" class="btn">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
