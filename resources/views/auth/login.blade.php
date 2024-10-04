<x-layout>
    <x-slot:heading>Login page</x-slot:heading>

<form method="POST" action="/login">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-container>
            <x-form-label for="email">email</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="email" id="email" value="" />
            </div>
          <x-form-error name='email' />
          </x-form-container>

          <x-form-container>

            <x-form-label for="salary">Salary</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="password" id="password" value=""  autocomplete="password"/>

            </div>
            <x-form-error name='password' />
        </x-form-container>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">

        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-btn>Login</x-form-btn>
      </div>
    </div>
  </form>


</x-layout>
