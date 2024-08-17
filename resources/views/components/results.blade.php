<x-layout>
    <x-page-header>
        Results
    </x-page-header>
    <div class="space-y-6 flex flex-col">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach


    </div>
</x-layout>
