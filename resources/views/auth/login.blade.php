<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-2" :status="session('status')" />

  <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
    @csrf
    <div>
      <x-input-label for="id_user" :value="__('Email or Username')" />
      <x-text-input id="id_user" class="block mt-1 w-full" type="text" name="id_user" :value="old('id_user')" required
        autocomplete="false" />
      <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
    </div>
    <div>
      <x-input-label for="password" :value="__('Password')" />
      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="current-password" />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex items-center justify-between">
      <div class="flex items-start">
        <div class="flex items-center h-5">
          <input id="remember_me" type="checkbox"
            class="rounded bg-gray-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500 cursor-pointer"
            name="remember">
        </div>
        <div class="ml-3 text-sm">
          <label for="remember_me" class="text-slate-600 dark:text-slate-400">{{ __('Remember me') }}</label>
        </div>
      </div>
      @if (Route::has('password.request'))
        <a href{{ route('password.request') }}"
          class="text-sm font-medium text-slate-400 hover:underline dark:text-slate-600 cursor-pointer">{{ __('Forgot your password?') }}</a>
      @endif
    </div>
    <x-primary-button>
      {{ __('Log in') }}
    </x-primary-button>
    {{-- @if (Route::has('register'))
        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
          Don’t have an account yet? <a href="{{ route('register') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
        </p>
      @endif --}}
  </form>

  {{-- <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email Address -->
      <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
          autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
          autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox"
            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
            name="remember">
          <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
          <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
        @endif

        <x-primary-button class="ms-3">
          {{ __('Log in') }}
        </x-primary-button>
      </div>
    </form> --}}
</x-guest-layout>
