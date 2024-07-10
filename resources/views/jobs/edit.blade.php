<x-layout>
    <x-slot:heading>edit job portal</x-slot:heading>

<form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-container>
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="title" id="title" value="{{ $job->title }}" />
            </div>
          <x-form-error name='title' />
          </x-form-container>

          <x-form-container>

            <x-form-label for="salary">Salary</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="salary" id="salary" value="{{ $job->salary }}"  autocomplete="salary"/>

            </div>
            <x-form-error name='salary' />
        </x-form-container>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-btn>Edit</x-form-btn>
    </div>
  </form>

</x-layout>
