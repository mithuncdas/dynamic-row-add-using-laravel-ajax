@foreach ( $products as $product)
    <tr>

        <td>{{ $product->serial }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->details }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->qty }}</td>
        <td>{{ $product->total }}</td>
        <td><button onclick="removeRow({{ $product->id }})"  class="btn btn-sm btn-danger">Remove</button></td>

    </tr>
@endforeach