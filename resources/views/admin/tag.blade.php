@extends('admin.layout')
@section('title', 'Category')
@section('breadcrumb', 'Category')
@push('styles')
    <style>
        .categories-box {
            width: 50%;
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #d5d5d5;
            padding: 15px;
        }

        .categories-box::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .categories-box::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        .categories-box::-webkit-scrollbar-thumb {
            background-color: #d5d5d5;
            border: 2px solid #d5d5d5;
        }

        th {
            font-weight: 600;
        }

        td {
            color: #727070 !important;
        }

        .no-data {
            text-align: center;
            font-size: 1.5rem;
            margin-top: 20px;
            display: none;
        }
        #updatecategorydiv {
            display: none;
        }
        .filter {
            filter: blur(4px);

        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
<section>
    <div class="row">
        <div class="col-12 col-lg-4">
        <div class="card">
        <div class="card-body p-4" id="addcategorydiv">
            <h5 class="mb-4">Add Category</h5>
            <form id="addCategoryForm">
                @csrf
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="categoryName" name="name" placeholder="Category Name" required>
                </div>
                <button type="button" id="addCategory" class="btn btn-primary">Save</button>
            </form>
        </div>

        <div class="card-body p-4" id="updatecategorydiv" style="display: none;">
            <h5 class="mb-4">Update Category</h5>
            <form id="updateCategoryForm">
                @csrf
                <input type="hidden" id="categoryId" name="category_id"> 
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="name" id="updateCategoryName"  placeholder="Category Name" required>
                </div>
                <button type="button" id="updateCategory" class="btn btn-primary">Update</button>
            </form>
        </div>

        <div class="card-body p-4" id="viewcategorydiv" style="display: none;">
            <h5><b>View Category</b></h5>
            <p><b>Category Name</b></p>
            <p id="category-name"></p>
            <hr>
            <p><b>Publish Date</b></p>
            <p id="category-date"></p>
        </div>

    </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body p-4" id="categorydiv">
                    <h5 class="mb-4">View Category</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <span class="me-2">Show</span>
                            <select id="per-page" class="form-select me-2" style="width: auto;">
                                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                                <option value="30" {{ request('per_page') == 30 ? 'selected' : '' }}>30</option>
                                <option value="40" {{ request('per_page') == 40 ? 'selected' : '' }}>40</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                            </select>
                            <span class="me-2">entries</span>
                        </div>

                        <div class="d-flex align-items-center w-50">
                            <input type="text" id="search" class="form-control w-100" placeholder="Search"
                                value="{{ request('search') }}">
                        </div>
                    </div>

                    <div id="category-tables" class="table-responsive p-4">
                        <table class="table" id="category-table">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Publish Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="categoryname">{{ $category->name }}</td>
                                        <td>{{ $category->created_at->format('F d, Y') }}</td>
                                        <td>
                                         

                                            <button type="button" class="btn btn-sm btn-info view-category" data-id="{{ $category->id }}">
                                            <i class="bi bi-eye"></i>

                                        </button>

                                               <button type="button" class="btn btn-sm btn-warning edit-category" data-id="{{ $category->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                      

                                            <form class="delete-category-form" data-id="{{$category->id }}"
                                                action="{{ route('category.delete', $category->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div id="pagination-links" class="d-flex justify-content-between align-items-center">
                            <div>
                                Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of
                                {{ $categories->total() }} entries
                            </div>
                            <div class="show">
                                {{ $categories->appends(['search' => request('search'), 'per_page' => request('per_page')])->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                        <div class="no-data" id="no-data">Data not available</div>

                    </div>

                </div>


</section>


<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
        $('.view-category').on('click', function (e) {
    e.preventDefault();
    
    var categoryId = $(this).data('id');
    
    $.ajax({
        url: '/category/' + categoryId,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status === "true") {
                $('#category-name').text(response.data.name);
                $('#category-date').text(response.data.created_at);
                
                $('#addcategorydiv').hide();
                $('#updatecategorydiv').hide();
                $('#viewcategorydiv').show();
                $('#categorydiv').addClass("filter")
            } else {
                toastr.error(response.message);
            }
        },
        error: function(xhr) {
            toastr.error('An error occurred while fetching the category details.');
        }
    });
});

        $('.edit-category').on('click', function (e) {
        e.preventDefault();
            console.log("editblog")
        let categoryId = $(this).data('id');

        $.ajax({
            url: '/category/' + categoryId + '/edit',
            type: 'GET',
            success: function (response) {
                if (response.status === 'true') {
                    $('#updateCategoryName').val(response.data.category.name);
                    $('#categoryId').val(response.data.category.id);
                    $('#addcategorydiv').hide();
                    $('#updatecategorydiv').show(); 
                    $('#viewcategorydiv').hide();
                    $('#categorydiv').addClass("filter")
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                toastr.error('An error occurred while fetching the category.');
            }
        });
    });


    $('#updateCategory').on('click', function () {
        let categoryId = $('#categoryId').val();
        let categoryName = $('#updateCategoryName').val();

        $.ajax({
            url: '/category/' + categoryId,
            type: 'PUT',
            data: {
                _token: $('input[name="_token"]').val(),
                name: categoryName
            },
            success: function (response) {
                if (response.status === 'true') {
                    toastr.success('Category updated successfully.');
                    $('#addcategorydiv').show();
                    $('#updatecategorydiv').hide();
                    $('#categorydiv').removeClass("filter")
                    fetchCategories();
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                toastr.error('Failed to update category.');
            }
        });
    });
        let deleteForm;
        $('.delete-category-form').on('click', function (e) {
            e.preventDefault();

            deleteForm = $(this);
            $('#confirmModal').modal('show');
        });
        $('#confirmDeleteBtn').on('click', function () {
            if (deleteForm) {
                var form = deleteForm;
                var formData = form.serialize();
                var url = form.attr('action');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        if (response.status === 'true') {
                            toastr.success(response.message);
                            form.closest('tr').remove();
                            fetchCategories();
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function (xhr) {
                        toastr.error('An error occurred while deleting the blog.');
                    }
                });

                $('#confirmModal').modal('hide');
            }
        });
        $('#search').on('keyup', function () {
            fetchCategories();
        });

        $('#per-page').on('change', function () {
            fetchCategories();
        });
        function fetchCategories() {
            let query = $('#search').val();
            let perPage = $('#per-page').val();
            $('#category-tables').hide();
            $('#pagination-links').hide();
            $('#no-data').hide();
            $.ajax({
                url: '{{ route("admin.category") }}',
                type: 'GET',
                data: { search: query, per_page: perPage },
                success: function (response) {
                    $('#category-tables').html($(response.html).find('#category-tables').html()).show();
                    $('#pagination-links').html($(response.html).find('#pagination-links').html()).show();
                    if ($('#category-tables tbody tr').length === 0) {
                        $('#no-data').show();

                    }
                },
                error: function (xhr) {
                    $('#loader').hide();
                    $('#category-tables').hide();
                    $('#pagination-links').hide();
                    $('#no-data').show();

                    toastr.error('An error occurred while fetching categories.');
                }
            });
        }




    });


    $(document).on('click', '#addCategory', function () {
        var categoryName = $('#categoryName').val().trim();

        if (!categoryName) {
            toastr.warning('Category name cannot be empty.');
            return;
        }

        $.ajax({
            url: '{{ route("categories.store") }}',
            type: 'POST',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'name': categoryName
            },
            success: function (response) {
                if (response.success) {
                    var exists = false;
                    $('.categories .form-check').each(function () {
                        if ($(this).find('label').text().trim() === response.category.name) {
                            exists = true;
                            return false;
                        }
                    });

                    if (!exists) {
                        $('#category-table tbody').prepend(`
                        <tr>
                            <td class="categoryname">${response.category.name}</td>
                            <td>${new Date(response.category.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <form action="" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    `);
                     
                        $('#categoryName').val('');
                        $('#addCategoryForm input').val('');
                     
                        toastr.success('Category added successfully.');
                        fetchCategories();
                    } else {
                        toastr.info(response.message);
                    }

                   
                } else {
                    toastr.info(response.message);
                }
            },
            error: function (xhr) {
                toastr.error('An error occurred. Please try again.');
            }
        });
    });

</script>

@push('scripts')
@endpush