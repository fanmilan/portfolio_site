<x-section title="Связь со мной" header-background='white' body-background="#e6e6e6" name="feedback">
    <div class="feedback">
        <form>
            <x-field label="Имя:">
                <input type="text" placeholder="Имя..." class="field__input"/>
            </x-field>
            <x-field label="Email:">
                <input type="email" placeholder="Email..." class="field__input"/>
            </x-field>
            <x-field label="Сообщение:">
                <textarea class="field__textarea"></textarea>
            </x-field>
            <input type="submit" class="field__button"/>
        </form>
    </div>
    <x-contacts></x-contacts>
</x-section>
