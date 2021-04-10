<x-section title="Связь со мной" header-background='white' body-background="#e6e6e6" name="feedback">
    <div class="feedback">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="{{route('feedback')}}" method="POST">
            @csrf
            <x-field label="Имя:">
                <input type="text" placeholder="Имя..." class="field__input" name="name" required />
            </x-field>
            <x-field label="Email:">
                <input type="email" placeholder="Email..." class="field__input" name="email"  />
            </x-field>
            <x-field label="Сообщение:">
                <textarea class="field__textarea" name="message"></textarea>
            </x-field>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <input type="submit" class="field__button"/>
        </form>
    </div>
    <x-contacts></x-contacts>
</x-section>
