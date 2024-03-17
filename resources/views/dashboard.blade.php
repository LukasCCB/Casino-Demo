<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Game List') }}
        </h2>

    </x-slot>

    <div class="py-5">

        <div class="py-4">

            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <div class="flex flex-wrap gap-8">
                            @php $i=0; @endphp
                            @for($i;$i<130;$i++)
                                <a href="#"
                                   class="transition ease-in-out delay-150 bg-gray-100 dark:bg-gray-900 hover:-translate-y-1 hover:scale-110 hover:bg-gray-500 duration-300">
                                    <img src="https://demo.viperpro.cloud/storage/01HPQDPYZXK5AHDJV930WYRX8H.png"
                                         width="150px" height="150px" alt="">
                                    <span class="ml-1">Fortune Tiger</span>
                                </a>
                            @endfor
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="py-2 text-center text-sm text-black dark:text-white/70">
        {{config('app.name')}} v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

</x-app-layout>
