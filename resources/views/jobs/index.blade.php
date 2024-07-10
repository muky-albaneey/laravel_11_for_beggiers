<x-layout>
    <x-slot:heading>Jobs portal</x-slot:heading>
    <section>
        @foreach ($jobs as $item)
            <a href="/jobs/{{ $item->id }}">
                <h1>{{ $item->employer->name }}</h1>
                <span>{{ $item->title }}</span>
                <span>{{ $item->salary }}</span>
            </a>
        @endforeach
    </section>
    {{ $jobs->links() }}
</x-layout>
