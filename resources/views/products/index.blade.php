<!DOCTYPE html>
<html>
<body>
    <p>Products:</p>
    <table>
        <thread>
            <tr>
                @foreach (['Id', 'Name', 'Category'] as $column)
                    <td>{{ $column }}</td>
                @endforeach
            </tr>
        </thread>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }} </td>
                    <td>{{ $product['name'] }} </td>
                    <td>{{ $product['category'] }} </td>
                 </tr>
            @endforeach
        </tbody>
        </table>

    <p>Tasks:</p>
    <ul>
        @foreach (@tasks as $task)
            <li> {{ $task }} <li>
        @endforeach
    </ul>

    <p> Global variables: </p>
    <p> {{ $sharedVariable }} </p>

    <p> Product Key: {{ $productKey }}</p>

</body>
</html>






