@include('adminnav')

<div class="container">

    <form class ="d-flex" action="{{ route('category.update', $category->_id) }}" method="POST"
        enctype="multipart/form-data">

        @csrf

        @method('put')

        <div class="row ">

            <div class="col-4 py-3">

                <div class="mb-3">

                    <label for="" class="form-label">Category Name</label>

                    <input type="text" class="form-control" name="category_name"
                        id=""aria-describedby="helpId" placeholder="" value="{{ $category->category_name }}" />

                    <span class="text-danger">

                        @error('category_name')
                            {{ $message }}
                        @enderror

                    </span>

                </div>

            </div>

            <div class="col-4">

                <div class="mb-3 py-3">

                    <label for="" class="form-label">Images</label>

                    <input type="file" class="form-control" name="category_pic" id=""
                        aria-describedby="helpId" placeholder="" />

                    <span class="text-danger">

                        @error('category_pic')
                            {{ $message }}
                        @enderror

                    </span>

                </div>

            </div>

            <div class="col-4">

                <div class="mb-3 py-3">

                    <button type="submit" class="btn btn-outline-dark">Update</button>

                    <button type="reset" class="btn btn-outline-secondary">Clear</button>

                </div>

            </div>

        </div>

    </form>

    @include('adminfooter')
