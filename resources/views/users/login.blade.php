<x-layout>

    <div>
        <form action="" method="POST">
            @csrf
            <label>Email</label>
            <input type="emial" name="email" />
            <label>Password</label>
            <input type="password" name="password" />
            <input type="button" value="submit">
        </form>
    </div>
</x-layout>