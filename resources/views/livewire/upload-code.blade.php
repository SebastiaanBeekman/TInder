<div>
    <h2 class="mt-6 text-3xl font-extrabold text-gray-900 mb-2">
        Voer je eigen code snippet in
    </h2>
    <p>
        Deze wordt getoond aan de andere gebruikers. Dit is de code snippet waar mensen op zullen swipen. Schrijf een
        grappige, leuke, lieve of geniale snippet! Dit is je kans om je ware aard te laten zien! Als je Javascript
        gebruikt, wordt je code automatisch geformat.
    </p>
    <p class="mt-4">
        Let op! Je kunt dit niet meer aanpassen nadat je dit hebt geupload.
    </p>
    <div class="mt-6">
        <textarea rows="4" name="comment" id="comment" wire:model="code"
            class="shadow-sm focus:ring-rose-500 focus:border-rose-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
    </div>

    <div wire:loading class="mt-4">
        <p>
            <strong>Heel even geduld.</strong> De AI is hard aan het werk voor je.
        </p>
    </div>

    <button wire:click="storeImage"
        class="w-full flex justify-center py-2 px-4 mt-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose-500 hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500"
        id="preview-button">
        Sla code snippet op
    </button>

    @if ($image)
        <img src="{{ $image }}" alt="preview" class="mt-6">
    @endif
</div>
