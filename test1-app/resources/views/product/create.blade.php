@include('adminnav')


<h2>Add Product</h2>
<hr>

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="product_name" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_name')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input type="text" class="form-control" name="product_desc" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_desc')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="text" class="form-control" name="product_price" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_price')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Discount</label>
        <input type="text" class="form-control" name="product_discount" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_discount')
                    {{$message}}
                 @enderror
        </span>
    </div>


    
    

    <div class="mb-3">
        <label for="" class="form-label">Picture</label>
        <input type="file" class="form-control" name="product_pic" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('product_pic')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Category</label>
        <select name="category" id="" class="form-control">
            @foreach ($categories as $item)
                <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
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
        <input type="text" class="form-control" name="color" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('color')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label"> Details Description</label>
        <input type="text" class="form-control" name="detail_desc" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('detail_desc')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Primary Materal</label>
        <input type="text" class="form-control" name="primary_material" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('primary_material')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Weight</label>
        <input type="text" class="form-control" name="weight" id="" aria-describedby="helpId"
            placeholder="" />
            <span class="text-danger">
                @error('weigth')
                    {{$message}}
                 @enderror
        </span>
    </div>

    <button type="submit" class="btn btn-outline-dark">Insert Product </button>










</form>

@include('adminfooter')
