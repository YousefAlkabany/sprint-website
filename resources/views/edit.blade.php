<x-layout>



    <x-slot:heading>
        Edit {{ $job['title'] }}
    </x-slot:heading>

</x-layout>

<section class=" p-5 mt-4">
    <div class="container align-content-center bg-light p-5 border border-4 border-dark rounded rounded-3">
        <form method="POST" action="/jobs/{{ $job['id'] }}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $job['title'] }}">
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" value="{{ $job['salary'] }}">
            </div>

            <button type="submit" class="btn btn-warning btn-lg mt-4">Edit</button>


        </form>
    </div>

</section>

<x-footer>
</x-footer>
