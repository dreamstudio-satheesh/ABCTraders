@extends('layouts.partials.simple.master')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nestable-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('breadcrumb')
  <div class="col-auto header-right-wrapper page-title">
      <div>
          <h2>Categories Management     </h2>
          <nav>
              <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                  <li class="breadcrumb-item f-w-500">Categories</li>
                  <li class="breadcrumb-item f-w-500 active">Edit</li>
              </ol>
          </nav>
      </div>
  </div>
@endsection

@section('content')
  <div class="container-fluid">
      <div class="row tilt-showcase">
          <div class="col-xxl-5 box-col-6 col-lg-6">
              <div class="card height-equal title-line">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h2>Categories</h2>
                      <a href="{{ route('admin.category.index') }}" class="btn btn-primary">{{ __('Add Category') }}</a>
                  </div>
                  <div class="card-body">
                      @include('admin.category.list', ['categories' => $categories])
                  </div>
              </div>
          </div>
          <div class="col-xxl-7 box-col-6 col-lg-6">
              <div class="card height-equal title-line">
                  <div class="card-header">
                      <h2>Edit Category</h2>
                  </div>
                  <div class="card-body">
                      <form class="row g-3 custom-input" novalidate="" id="categoryForm"
                          action="{{ route('admin.category.update',$cat->id) }}" method="post"
                          enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          @include('admin.category.fields',['parents' => $parent])
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('assets/js/nestable/jquery.nestable.min.js') }}"></script>
  <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
  <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
  <script src="{{ asset('assets/js/bookmark/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/js/custome-validation/validation.js') }}"></script>

  <script>
      $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        function updateToDatabase() {
          idString = $('.dd').nestable('toArray', {
            attribute: 'data-id'
          });
          var orderIndex = [];
          $('#nestable3 li').each(function(index) {
            orderIndex.push({
              id: $(this).attr('data-id'),
              order: index
            })
          });
          var mergedArray = Object.values(Object.groupBy([...orderIndex, ...idString],
            ({
              id
            }) => id)).map(e => e.reduce((acc, cur) => ({
            ...acc,
            ...cur
          })));
    
          $.ajax({
            url: '{{ route("admin.category.update.orders") }}',
            method: 'POST',
            data: {
              categories: mergedArray
            },
            success: function() {
              //
            }
          })
        }
    
        $('.dd').nestable({
          maxDepth: 12
        }).on('change', updateToDatabase);
      })
  </script>
@endsection