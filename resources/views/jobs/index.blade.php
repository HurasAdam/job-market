<x-layout>
    <div class="space-y-10 pt-6">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Find your dream job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Project Manager"
                    class="rounded bg-white/15 border-white/5 px-5 py-4 w-full max-w-xl ">
            </form>
        </section>
        <section class="pt-10">
            <x-section-header>Top jobs</x-section-header>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($jobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-header>Tags</x-section-header>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag='$tag' />
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
