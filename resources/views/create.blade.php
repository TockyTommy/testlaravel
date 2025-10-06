<x-layout>
    <x-slot:title>New Form</x-slot:title>

    <div class="max-w-xl mx-auto mt-10">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-2xl font-bold mb-4">Enter your information</h1>

                @if ($errors->any())
                    <div class="alert alert-error mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('infos.store') }}">
                    @csrf

                    <div class="form-control mb-3">
                        <label class="label"><span class="label-text">Name</span></label>
                        <input class="input input-bordered w-full"
                               type="text" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-control mb-3">
                        <label class="label"><span class="label-text">Age</span></label>
                        <input class="input input-bordered w-full"
                               type="number" name="age" value="{{ old('age') }}" min="0" max="150" required>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label"><span class="label-text">Phone number</span></label>
                        <input class="input input-bordered w-full"
                               type="text" name="phonenumber" value="{{ old('phonenumber') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('home') }}" class="btn">Back to Home</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
