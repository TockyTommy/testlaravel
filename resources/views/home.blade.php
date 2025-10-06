<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="flex flex-col items-center justify-center h-screen text-center">
        <h1 class="text-4xl font-bold mb-6">User Information App</h1>
        <p class="text-base-content/70 mb-8 max-w-lg">
            Enter your information or see all entries.
        </p>
        <div class="flex gap-4">
            <a href="{{ route('infos.create') }}" class="btn btn-primary text-lg px-8 py-3">
                Go to Form
            </a>
            <a href="{{ route('infos.index') }}" class="btn btn-outline text-lg px-8 py-3">
                View All Data
            </a>
        </div>
    </div>
</x-layout>
