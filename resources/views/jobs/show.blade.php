<x-layout>
    <x-slot:heading>Single job portal</x-slot:heading>
    <section>
        {{ $job->employer->name }}
        {{ $job->title }}
        {{ $job->salary }}

        <x-link-tag href="/jobs/{{ $job->id }}/edit">Edit job</x-link-tag>
    </section>
</x-layout>
