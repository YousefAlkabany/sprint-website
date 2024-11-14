<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
</x-layout>

<div class="row">
    @foreach ($jobs as $job)
        <div class="col-md-3 mb-4 text-light d-flex justify-content-center">
            <a class="link-light text-decoration-none" href="jobs/{{$job['id']}}">
                <x-card>
                    <img src="{{$job['url']}}" class="card-img-top img-fluid" alt="Job Image" style="height: 200px; object-fit: cover;">
                    <h3 class="card-title">{{$job['title']}}</h3>
                </x-card>
            </a>
        </div>
    @endforeach
</div>

<x-footer>

</x-footer>




