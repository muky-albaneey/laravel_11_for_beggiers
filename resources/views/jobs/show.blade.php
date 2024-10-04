<x-layout>
    <x-slot:heading>Single job portal</x-slot:heading>
    <section>
        {{ $job->employer->name }}
        {{ $job->title }}
        {{ $job->salary }}

        @can('edit', $job)
          <x-link-tag href="/jobs/{{ $job->id }}/edit">Edit job</x-link-tag>
        @endcan

    </section>
</x-layout>
