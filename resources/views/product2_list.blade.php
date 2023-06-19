<table id="myTable" class="display">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>sku</th>
            <th>Description</th>
            <th>Summary</th>
            <th>Categories</th>
            <th>Image</th>
            <th>quantity</th>
            <th>price</th>
            <th>mrp</th>
            <th>status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="productBody">
          @php $i=1; @endphp;
          @foreach ($products as $product)
          <tr>
            <td>@php echo $i; @endphp</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->summary }}</td>
            <td>{{ $product->categories }}</td>
            <td><img src="{{ asset('storage/' . $product->image) }}" height="50px" width="50px"></td>
            <!-- <td><img src="{{ asset('storage/'. $product->image) }}"></td> -->
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->mrp }}</td>
            <td>@if( $product->status == 1 ) {{ 'active'}} @else {{ 'deactive' }} @endif</td>
            <td class="d-flex">
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$product->id}} " onclick="updateProductView($(this))">Edit</button>
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$product->id}} "  onclick="deleteProduct($(this))">Delete</button>
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$product->id}} " onclick="updateStatus($(this))" value="@if( $product->status == 1 ) {{0}} @else {{1}} @endif">@if( $product->status == 1 ) {{ 'Deactive'}} @else {{ 'Active' }} @endif</button>

            </td>
          </tr>
          @php $i++; @endphp;
          @endforeach
        </tbody>
      </table>
