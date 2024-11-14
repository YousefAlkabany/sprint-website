<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
</x-layout>
<section class=" p-5 mt-4">
    <div class="container align-content-center bg-light p-5 border border-4 border-dark rounded rounded-3">
        <form method="POST" action="/register">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <p class="text-danger mt-2"><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                @error('email')
                    <p class="text-danger mt-2"><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <p class="text-danger mt-2"><i>{{ $message }}</i></p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation"
                    name="password_confirmation">
            <button type="submit" class="btn btn-warning btn-lg mt-4">Register</button>
        </form>
    </div>

</section>
