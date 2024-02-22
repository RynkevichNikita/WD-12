<x-base>
    <x-slot:title>
        Register
    </x-slot>

    <form action="register" method="post" style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
        @csrf
        <div style="display:flex;flex-direction:column;align-items:flex-end">
            <div>
                <label for="name">Username</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password_confirmation">Confirm your password</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <button type="submit" style="width:40%;height:40px;background:rgb(5, 218, 5)">Submit</button>
        </div>
    </form>

</x-base>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif