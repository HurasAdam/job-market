<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Find your dream job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Project Manager"
                    class="rounded bg-white/15 border-white/10 px-5 py-4 w-full max-w-xl ">
            </form>
        </section>
        <section>
            <x-section-header>Top jobs</x-section-header>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section>
            <x-section-header>Tags</x-section-header>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-header>Recent jobs</x-section-header>
            <div class="mt-6 space-y-6 flex flex-col">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />

            </div>
        </section>

    </div>
</x-layout>
