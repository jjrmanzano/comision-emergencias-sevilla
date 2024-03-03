<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
      <div class="bg-white">
        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
          <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
              <a href="https://trabajosocialsevilla.es" class="-m-1.5 p-1.5">
                <span class="sr-only">Comisión de Emergencias - Sevilla</span>
                <img class="h-16 w-auto grayscale" src="assets/images/logo_grid.webp" alt="Colegio Oficial de Trabajo Social de Sevilla">
              </a>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Abrir menú principal</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Recursos sociales (en construcción)</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Residencias y pisos tutelados (en construcción)</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Primeros auxilios psicológicos (en construcción)</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Mapa de Sevilla (en construcción)</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Acceder <span aria-hidden="true">&rarr;</span></a>
            </div>
          </nav>
        </header>

        <main class="isolate">
          <!-- Hero section -->
          <div class="relative pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
              <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="py-24 sm:py-32">
              <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                  <h2 class="text-base font-semibold leading-7 text-indigo-600">Colegio Oficial de Trabajo Social de Sevilla</h2>
                  <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Comisión de Emergencias</h1>
                  <p class="mt-6 text-lg leading-8 text-gray-600">Coordinación de recursos sociales en situaciones de emergencia social.</p>
                  <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/login" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Acceso </a>
                  </div>
                </div>  
              </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
              <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
          </div>
        </main>
      </div>
    </body>
</html>


