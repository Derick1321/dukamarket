<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    @isset($productOption)
                        <div class="card-header bg-primary">
                            <h5 class="mt-3 font-size-16 text-white">{{ __('Update productOption') }}</h5>
                        @else
                            <div class="card-header bg-success">
                                <h5 class="mt-3 font-size-16 text-white">{{ __('New productOption') }}</h5>
                            @endisset
                        </div>
                        <div class="card-body">
                            @isset($productOption)
                                <form
                                    action="{{ route('product.products.productOptions.update', ['product' => $product->id, 'productOption' => $productOption]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @method('patch')
                                @else
                                    <form
                                        action="{{ route('product.products.productOptions.store', ['product' => $product->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                    @endisset
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label class="form-label" for="billing-name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ isset($productOption) ? $productOption->name : null }}"
                                                    name="name" placeholder="Enter name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div><!-- end col -->

                                    </div>

                                    <hr />
                                    <div>
                                        @isset($productOption)
                                            <div class="float-end"><button type="submit" class="btn btn-primary">Update Info<i
                                                        class="mdi mdi-arrow-right ms-1"></i></button></div>
                                        @else
                                            <div class="float-end"><button type="submit" class="btn btn-success">Save Info<i
                                                        class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        @endisset
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

            </div><!-- end row -->

        </div>
    </div>
</x-app-layout>
