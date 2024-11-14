<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
</x-layout>
<section class=" p-5 mt-4">
    <div class="container align-content-center bg-light p-5 border border-4 border-dark rounded rounded-3">
        <form method="POST" action="/login">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"  value={{old('email')}}>
                @error('email')
                    <p class="text-danger"><i>{{$message}}</i></p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-warning btn-lg mt-4">Login</button>
        </form>
    </div>

</section>
