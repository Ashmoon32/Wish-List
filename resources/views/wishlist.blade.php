<!DOCTYPE html>
<html>
<head>
    <title>My Wish List</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 50px auto; text-align: center; }
        input { padding: 10px; width: 70%; }
        button { padding: 10px; background: blue; color: white; border: none; }
        ul { list-style: none; padding: 0; }
        li { background: #f4f4f4; border-bottom: 1px solid #ddd; padding: 10px; display: flex; justify-content: space-between; }
        .delete-btn { background: red; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h1>✨ My Wish List ✨</h1>

    <form action="/add" method="POST">
        @csrf 
        <input type="text" name="title" placeholder="I wish for..." required>
        <button type="submit">Add Wish</button>
    </form>

    <ul>
        @foreach ($wishes as $wish)
            <li>
                {{ $wish->title }}
                
                <form action="/delete/{{ $wish->id }}" method="POST">
                    @csrf
                    @method('DELETE') <button class="delete-btn">X</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>