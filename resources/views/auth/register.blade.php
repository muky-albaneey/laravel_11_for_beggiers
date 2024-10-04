<x-layout>
    <x-slot:heading>Sign up</x-slot:heading>

<form method="POST" action="/users">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-container>
            <x-form-label for="first_name">First name</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="first_name" id="first_name" value="" />
            </div>
          <x-form-error name='first_name' />
          </x-form-container>

          <x-form-container>
            <x-form-label for="last_name">Last name</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="last_name" id="last_name" value="" />
            </div>
          <x-form-error name='last_name' />
          </x-form-container>

          <x-form-container>
            <x-form-label for="email">email </x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="email" id="email" value="" />
            </div>
          <x-form-error name='email' />
          </x-form-container>

          <x-form-container>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="password" id="password" value="" />
            </div>
          <x-form-error name='password' />
          </x-form-container>
          <x-form-container>
            <x-form-label for="password_confirmation">Confirm password</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="password_confirmation" id="password_confirmation" value="" />
            </div>
          <x-form-error name='password_confirmation'/>
          </x-form-container>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">

        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-btn>Sign up</x-form-btn>
      </div>
    </div>
  </form>


</x-layout>
