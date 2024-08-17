<x-layout>
    {{-- {{ dd($tags) }} --}}
    <div class="space-y-10 pt-6">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Find your dream job</h1>

            <x-forms.form class="mt-6" action="/search">
                <x-forms.input :label="false" name="q" placeholder="Project Owner" />

                <button>Submit</button>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-header>Featured jobs</x-section-header>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>
        </section>


        <section>
            <x-section-header>Tags</x-section-header>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag></x-tag>
                @endforeach
            </div>
        </section>



        <section>
            <x-section-header>Recent jobs</x-section-header>
            <div class="mt-6 space-y-6 flex flex-col">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach


            </div>
        </section>

    </div>
</x-layout>
