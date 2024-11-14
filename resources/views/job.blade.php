<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>



    <div class="container  justify-content-start mt-5">
        <div class="row">
            <div class="col-md-6">
                <ul class="my-3">
                    <li>
                        <h2><span class="text-primary">job id : </span>{{ $job['id'] }}</h2>
                    </li>
                    <li>
                        <h2><span class="text-primary">job title : </span>{{ $job['title'] }}</h2>
                    </li>
                    <li>
                        <h2><span class="text-primary">job salary : </span>{{ $job['salary'] }} USD</h2>
                    </li>
                </ul>
                @can('edit-job', $job)
                    <a class="btn btn-warning btn-lg mt-5 align-content-center " href="/jobs/{{ $job['id'] }}/edit"
                        role="button">Edit</a>

                    <button class="btn btn-danger mt-5 ms-3 btn-lg text-dark" form="delete-form"
                        type="submit">Delete</button>
                @endcan


            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/logos.png') }}" class="img-fluid ms-5" alt="fff">
            </div>
        </div>
    </div>

    <form action="/jobs/{{ $job['id'] }}" id="delete-form" method="POST">
        @csrf
        @method('DELETE')

    </form>
</x-layout>



<x-footer>

</x-footer>
