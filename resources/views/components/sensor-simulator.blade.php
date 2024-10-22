<div class="w-[100%] h-auto bg-transparent flex justify-center gap-8 p-1 mt-2" x-data="simulator()">
    <div class="w-[50%] p-4 flex flex-col gap-5">
        <div>
            <h1 class="font-extrabold text-4xl mb-4">Simule aqui</h1>
            <p class="text-zinc-400 mb-8">Por meio desse input você pode simular os valores recebidos pelo sensor e
                observar
                seu comportamento.</p>

            <input type="range" min="0" max="1023" value="0" x-model="rangeValue"
                class="w-full cursor-pointer" @input="checkWarnings()">
            <p class="text-center mt-2 font-bold">Valor Captado: <span x-text="rangeValue"></span></p>
        </div>

        <div>
            <h2 class="font-black text-xl">Guia de Cores:</h2>
            <ul class="flex flex-col gap-5 mt-2 dark:bg-gray-900 p-3 rounded-md">
                <li class="flex items-center gap-2">
                    <span class="w-6 h-6 inline-block rounded-full bg-green-500"></span>
                    Normal: Sem detecção de fumaça no ambiente
                </li>
                <li class="flex items-center gap-2">
                    <span class="w-6 h-6 inline-block rounded-full bg-red-500"></span>
                    Perigo: Fumaça detectada no ambiente
                </li>
            </ul>
        </div>
    </div>

    <div class="w-[50%] flex items-center flex-col gap-2">
        <img src="{{ asset('img/WhatsApp_Image_2024-10-18_at_21.33.07-removebg-preview.png') }}" alt="simulador"
            class="w-[60%] ">

        <div class="flex gap-5 items-center mt-10">
            <!-- LED 1 -->
            <div id="led1" class="w-12 h-12 rounded-t-[50%] rounded-tr-[50%] bg-gray-500"></div>

            <!-- LED 2 -->
            <div id="led2" class="w-12 h-12 rounded-t-[50%] rounded-tr-[50%] bg-gray-500"></div>
        </div>
    </div>
</div>

<script>
    function simulator() {
        return {
            rangeValue: 0, // Estado inicial do range

            // Função para verificar valores e emitir avisos
            checkWarnings() {
                if (this.rangeValue == 0) {

                    toggleLedsVisbility();

                } else if (this.rangeValue < 300) {

                    toggleLedsVisbility({
                        led1Enable: true,
                        led2Enable: false
                    });

                } else {

                    toggleLedsVisbility({
                        led1Enable: false,
                        led2Enable: true
                    });

                }
            }
        }
    }

    // Função para alternar o estado do LED
    function toggleLedsVisbility(states = {
        led1Enable: false,
        led2Enable: false
    }) {
        const led1 = document.getElementById('led1');
        const led2 = document.getElementById('led2');

        // Resetar as classes dos LEDs antes de aplicar novas classes
        led1.classList.remove("bg-green-500", "bg-gradient-to-tr", "from-green-500/50", "via-green-500/30",
            "to-green-500/20", "shadow-[0_0_75px_10px_rgb(0,255,0)]");
        led2.classList.remove("bg-red-500", "bg-gradient-to-tr", "from-red-500/50", "via-red-500/30", "to-red-500/20",
            "shadow-[0_0_75px_10px_rgb(255,0,0)]");

        // Verificar estados e aplicar classes conforme necessário
        if (states.led1Enable) {
            led1.classList.add(
                "bg-green-500", "bg-gradient-to-tr", "from-green-500/50", "via-green-500/30", "to-green-500/20",
                "shadow-[0_0_75px_10px_rgb(0,255,0)]"
            );
        }

        if (states.led2Enable) {
            led2.classList.add(
                "bg-red-500", "bg-gradient-to-tr", "from-red-500/50", "via-red-500/30", "to-red-500/20",
                "shadow-[0_0_75px_10px_rgb(255,0,0)]"
            );
        }
    }
</script>
