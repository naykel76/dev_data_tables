<x-gotime-layouts.base >

    @includeFirst(['components.layouts.partials.navbar', 'gotime::components.layouts.partials.navbar'])

    <main class="container py-3">
        {{ $slot }}
    </main>

    @includeFirst(['components.layouts.partials.footer', 'gotime::components.layouts.partials.footer'])

</x-gotime-layouts.base>
