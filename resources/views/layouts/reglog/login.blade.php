<x-base>
    <x-slot:title>
        Login
    </x-slot>

    <form action="login" method="post" style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
        @csrf
        <div style="display:flex;flex-direction:column;align-items:flex-end">
            <div>
                <label for="name">Username</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
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