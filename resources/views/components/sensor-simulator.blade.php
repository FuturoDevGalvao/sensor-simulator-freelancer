<div class="w-[100%] h-auto bg-transparent flex justify-center gap-8 p-1 mt-2" x-data="simulator()">
    <div class="w-[50%] p-4 flex flex-col gap-5">
        <div>
            <h1 class="font-extrabold text-4xl mb-4">Simule aqui</h1>
            <p class="text-zinc-400 mb-4">Por meio desse input você pode simular os valores recebidos pelo sensor e
                observar
                seu comportamento.</p>

            <input type="range" min="0" max="1023" value="0" x-model="rangeValue" class="w-full"
                @input="checkWarnings()">
            <p class="text-center mt-2 font-bold">Valor Captado: <span x-text="rangeValue"></span></p>
        </div>

        <div>
            <h2 class="font-black text-xl">Guia de Cores:</h2>
            <ul class="flex flex-col gap-5 mt-2 dark:bg-gray-900 p-3 rounded-md">
                <li class="flex items-center gap-2">
                    <span class="w-6 h-6 inline-block rounded-full bg-green-500"></span>
                    Normal
                </li>
                <li class="flex items-center gap-2">
                    <span class="w-6 h-6 inline-block rounded-full bg-yellow-400"></span>
                    Alerta
                </li>
                <li class="flex items-center gap-2">
                    <span class="w-6 h-6 inline-block rounded-full bg-red-500"></span>
                    Perigo
                </li>
            </ul>
        </div>
    </div>

    <div class="w-[50%]">
        <img src="" alt="simulador" class="w-full">
    </div>
</div>

<script>
    function simulator() {
        return {
            rangeValue: 0, // Estado inicial do range

            // Função para verificar valores e emitir avisos
            checkWarnings() {
                if (this.rangeValue > 300) {
                    alert('Aviso: valor excedeu 300!');
                } else if (this.rangeValue > 1000) {
                    alert('Aviso: valor está acima de 1000!');
                } else if (this.rangeValue < 50) {
                    alert('Aviso: valor está muito baixo para detecção!');
                }
            }
        }
    }
</script>
