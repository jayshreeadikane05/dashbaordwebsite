@extends('admin.layout')
@section('title', 'Blogs')
@section('breadcrumb', 'Blogs')

@push('styles')
    <style>
        .loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            display: none;
            margin: 20px auto;
        }
        i.fa.fa-pencil {
    color: #138980;
}
i.bi.bi-trash {
    color: #FF6062;
}
.table>thead {
    vertical-align: bottom;
    background-color: #F5FAF7;
    border-top: 1px solid #e9e9e9;
}
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .no-data {
            text-align: center;
            font-size: 1.5rem;
            margin-top: 20px;
            display: none;
        }

        .blogname {
            width: 25%;
            color: #3B3B3C !important;
    font-size: 18px;
    font-weight: 600;
        }

        th {
            font-weight: 600;
        }

        td {
            color: #727070 !important;
        }

        .catories-color {
            color: #3a3af9;
        }

        .action-btn {
            color: black;
            padding: 9px;
        }
        .blogadd {
            background-color: #245D51;
            color:white;
        }
    </style>
@endpush

@section('content')

<section>
    <h6 class="mb-0 text-uppercase d-flex justify-content-between align-items-center">
        All Blogs
        <div class="btn-group mb-3">
            <a href="{{ route('admin.addblog') }}" style="color:#fff;">
                <button type="button" class="btn blogadd">

                    Add New Blog

                </button>
            </a>

        </div>
    </h6>
   
    <div class="card">
        <div class="card-body">
          
        <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <span class="me-2">Show</span>
                    <select id="per-page" class="form-select me-2" style="width: auto;">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select>
                    <span class="me-2">entries</span>
                </div>

                <!-- <div class="d-flex align-items-center w-50">
                <label for="monthFilter">filter video Month:</label>
                <input type="month" id="monthFilter" name="monthFilter">
                </div> -->
            </div>
            <div id="blog-table" class="table-responsive">
                <table id="blogTable" class="table">
                    <thead>
                        <tr>
                            <th>Blog Image</th>
                            <th>Title</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Authore</th>
                            <th>Publish Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                                                <tr>
                                                    <td>
                                                        @if($blog->blogimage)
                                                            <img src="{{ asset($blog->blogimage) }}" alt="{{ $blog->name }}" style="width: 100px;">
                                                        @endif
                                                    </td>
                                                    <td class="blogname">{{ $blog->name }}</td>



                                                                                                        <td>
                                                        @php
                                                            $categoryIds = json_decode($blog->categories, true) ?? [];
                                                        @endphp

                                                        @if(is_array($categoryIds) && count($categoryIds) > 0)
                                                            <small class="categories-color">
                                                                @foreach($categoryIds as $index => $categoryId)
                                                                    @if(isset($categories[$categoryId]))
                                                                        <span class="category-name">{{ $categories[$categoryId]->name }}</span>
                                                                        @if($index < count($categoryIds) - 1)
                                                                            <span class="sep">, </span>
                                                                        @endif
                                                                    @else
                                                                        <span class="category-name">Unknown</span>
                                                                        @if($index < count($categoryIds) - 1)
                                                                            <span class="sep">, </span>
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            </small>
                                                        @else
                                                            <small>No Categories</small>
                                                        @endif
                                                    </td>

                                                    <td>
    @php
        $tagIds = json_decode($blog->tag, true) ?? [];
    @endphp

    @if(is_array($tagIds) && count($tagIds) > 0)
        <small class="tags-color">
            @foreach($tagIds as $index => $tagId)
                @if(isset($tag[$tagId]))
                    <span class="tag-name">{{ $tag[$tagId]->name }}</span>
                    @if($index < count($tagIds) - 1)
                        <span class="comma">, </span>
                    @endif
                @else
                    <span class="tag-name">Unknown</span>
                    @if($index < count($tagIds) - 1)
                        <span class="comma">, </span>
                    @endif
                @endif
            @endforeach
        </small>
    @else
        <small>No tags</small>
    @endif
</td>
<td>       {{ $blog->author ? $blog->author->first_name . ' ' . $blog->author->last_name : 'Unknown' }}
</td>
                                                    <td>{{ $blog->created_at }}</td>
                                                    <td>



                                                      
                                                        <a href="{{ route('admin.editblog', $blog->id) }}" class="btn btn-sm">
                                                            <i class="fa fa-pencil bg"></i>
                                                        </a>

                                                        <form class="delete-blog-form" data-id="{{ $blog->id }}"
                                                            action="{{ route('blogs.delete', $blog->id) }}" method="POST"
                                                            style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>


                                                    </td>
                                                </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>
            <div id="pagination-links" class="d-flex justify-content-between align-items-center">
                <div>
                    Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }} entries
                </div>
                <div>
                    {{ $blogs->appends(['search' => request('search'), 'per_page' => request('per_page')])->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
            <div class="loader" id="loader"></div>
            <div class="no-data" id="no-data">Data not available</div>
        </div>
    </div>

</section>


<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
        Are you sure you want to delete this blog?
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
        $(document).ready(function() {
        $('#blogTable').DataTable({
            "paging": false,
            "searching": true,
            "ordering": true,
            "info": false
        });
    });
        let deleteForm;

$('.delete-blog-form').on('click', function (e) {
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
                    fetchEntries();
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
            fetchEntries();
        });

        $('#per-page').on('change', function () {
            fetchEntries();
        });
        $('#category').on('change', function () {
            fetchEntries();
        });



        function fetchEntries() {
            let query = $('#search').val();
            let perPage = $('#per-page').val();
            let category = $('#category').val();
            $('#loader').show();
            $('#blog-table').hide();
            $('#pagination-links').hide();
            $('#no-data').hide();

            $.ajax({
                url: '{{ route("admin.viewblog") }}',
                type: 'GET',
                data: { search: query, per_page: perPage, category: category },
                success: function (response) {
                    $('#loader').hide();
                    $('#blog-table').html($(response.html).find('#blog-table').html()).show();
                    $('#pagination-links').html($(response.html).find('#pagination-links').html()).show();

                    if ($('#blog-table tbody tr').length === 0) {
                        $('#no-data').show();

                    }
                },
                error: function (xhr) {
                    $('#loader').hide();
                    $('#blog-table').hide();
                    $('#pagination-links').hide();
                    $('#no-data').show();
                    console.log('An error occurred: ' + xhr.responseText);
                }
            });
        }
    });
</script>
@push('pageScript')
@endpush