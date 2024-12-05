@include('adminnav')


<h2>Add Product</h2>
<hr>

<form action="{{ route('product.update', $product->_id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')

    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{ $product->product_name }}" name="product_name" id=""
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('product_name')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input type="text" class="form-control" value="{{ $product->product_desc }}" name="product_desc"
            id="" aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('product_desc')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="text" class="form-control" name="product_price" value="{{ $product->product_price }}"id=""
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('product_price')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Discount</label>
        <input type="text" value="{{$product->product_discount}}" class="form-control" name="product_discount" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_discount')
                    {{$message}}
                 @enderror
        </span>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Picture</label>
        <input type="file" class="form-control" name="product_pic"value="{{$product->product_pic }}" id=""
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('product_pic')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Category</label>
        <select name="category" id="" class="form-control">
            @foreach ($categories as $item)
                <option value="{{ $item->category_name }}"
                    {{ $product->category == $item->category_name ? 'selected' : '' }}>
                    {{ $item->category_name }}
                </option>
            @endforeach
        </select>

        <span class="text-danger">
            @error('category')
                {{ $message }}
            @enderror
        </span>
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Color</label>
        <input type="text" class="form-control" name="color" value="{{ $product->color }}"id=""
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('color')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label"> Details Description</label>
        <input type="text" class="form-control" name="detail_desc"value="{{ $product->detail_desc }}" id=""
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('detail_desc')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Primary Materal</label>
        <input type="text" class="form-control" name="primary_material" value="{{ $product->primary_material }}"
            id="" aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('primary_material')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Weight</label>
        <input type="text" class="form-control" name="weight" id="" value="{{ $product->weight }}"
            aria-describedby="helpId" placeholder="" />
        <span class="text-danger">
            @error('weigth')
                {{ $message }}
            @enderror
        </span>
    </div>

    <button type="submit" class="btn btn-outline-dark">Update Product </button>










</form>

@include('adminfooter')
