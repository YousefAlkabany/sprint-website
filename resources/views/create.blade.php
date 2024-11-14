<x-layout>



    <x-slot:heading>
        Create a Job
    </x-slot:heading>

</x-layout>

<section class=" p-5 mt-4">
    <div class="container align-content-center bg-light p-5 border border-4 border-dark rounded rounded-3">
        <form method="POST" action="/jobs">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary">

                @error('salary')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Image</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter image_url">
            </div>
            @error('salary')
                {{ $message }}
            @enderror
            <button type="submit" class="btn btn-warning btn-lg mt-4">Create</button>

        </form>
    </div>

</section>

<x-footer>
</x-footer>
