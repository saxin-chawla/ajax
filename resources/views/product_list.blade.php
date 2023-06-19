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
          @foreach ($users as $user)
          <tr>
            <td>@php echo $i; @endphp</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->title }}</td>
            <td>{{ $user->sku }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->summary }}</td>
            <td>{{ $user->categories }}</td>
            <td><img src="{{ asset('storage/' . $user->image) }}" height="50px" width="50px"></td>
            <!-- <td><img src="{{ asset('storage/'. $user->image) }}"></td> -->
            <td>{{ $user->quantity }}</td>
            <td>{{ $user->price }}</td>
            <td>{{ $user->mrp }}</td>
            <td>@if( $user->status == 1 ) {{ 'active'}} @else {{ 'deactive' }} @endif</td>
            <td class="d-flex">
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$user->id}} " onclick="updateProductView($(this))">Edit</button>
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$user->id}} "  onclick="deleteProduct($(this))">Delete</button>
              <button type="submit" class="btn btn-primary mx-2" data-id=" {{$user->id}} " onclick="updateStatus($(this))" value="@if( $user->status == 1 ) {{0}} @else {{1}} @endif">@if( $user->status == 1 ) {{ 'Deactive'}} @else {{ 'Active' }} @endif</button>

            </td>
          </tr>
          @php $i++; @endphp;
          @endforeach
        </tbody>
      </table>
