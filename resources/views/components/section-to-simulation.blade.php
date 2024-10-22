<section id="try"
    class="h-[80vh] w-[90%] p-8 text-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 mt-20 flex flex-col gap-5 rounded-md">
    <h1 class="uppercase text-4xl font-black pb-2 border-b border-gray-700">Experimente</h1>


    <div class="flex items-center justify-center flex-1">
        <div class="w-[50%] h-full flex flex-col gap-4 justify-center px-5">
            <h2 class="font-extrabold text-2xl">Temos uma ótima notícia para você!</h2>
            <p class="text-gray-400 text-justify">
                Você poderá testar o funcionamento do nosso
                sensor por meio do nosso simulador! No nosso simulador você poderá simular valores captados pelo sensor
                e observar o seu
                comportamento. Tudo isso de maneira
                rápida
                e
                didática! (O sensor tem até luizinhas!)
            </p>

            <h2 class="font-extrabold text-2xl">Eai, partiu testar?</h2>

            <a href="{{ route('simulator') }}"
                class="bg-blue-500 inline-flex w-[200px] items-center justify-center font-semibold p-2 rounded-md">Ir
                para
                o simulador</a>
        </div>

        <div class="w-[50%] h-full flex items-center justify-center">
            <img src="{{ asset('img/WhatsApp_Image_2024-10-18_at_21.33.07-removebg-preview.png') }}" alt="sensor"
                width="400">
        </div>
    </div>

</section>
