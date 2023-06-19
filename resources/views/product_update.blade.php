<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="updateModalLabel">Add products</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateProductForm" enctype='multipart/form-data'>

              <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />
              <input type="hidden" name="id" id="csrf" value="{{ $product->id }}" />
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name" name="name" value="{{ $product->name }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Product title" name="title" value="{{ $product->title }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="sku">sku</label>
                  <input type="text" class="form-control" id="sku" placeholder="Enter Product title" name="sku" value="{{ $product->sku }}"> 
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" placeholder="Enter Product description" name="description" value="{{ $product->description }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="summary">Summary</label>
                  <input type="text" class="form-control" id="summary" placeholder="Enter Product summary" name="summary" value="{{ $product->summary }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="categories">Categories</label>
                  <input type="text" class="form-control" id="categories" placeholder="Enter Product categories" name="categories" value="{{ $product->categories }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="image">Product Image</label>
                  <input type="file" class="form-control" id="image" placeholder="Enter Product image" name="image" value="{{ $product->image }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Product quantity" name="quantity" value="{{ $product->quantity }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Product price" name="price" value="{{ $product->price }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="mrp">MRP</label>
                  <input type="text" class="form-control" id="mrp" placeholder="Enter Product mrp" name="mrp" value="{{ $product->mrp }}">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Product</button>
              </div>
            </form>
          </div>
        </div>
      </div>