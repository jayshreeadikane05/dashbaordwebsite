@extends('admin.layout')
@section('title', 'Edit Blog')
@section('breadcrumb', 'Edit Blog')
@push('styles')
<style>
      .categories-box {
        display: flex;            
        flex-wrap: wrap; 
    }
    label.col-form-label {
    color: #303030;
    font-size: 19px;
    font-weight: 600;
}
i.fa.fa-pencil {
    color: #138980;
}
i.bi.bi-trash {
    color: #FF6062;
}
button#submitBtn {
    background-color: #245D51;
    border: none;
}

button#replaceImage {
    background-color: #245D51;
    color: white;
    border: none;
}

.selected-category {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    margin: 5px;
    cursor: move;
    /* Indicate that the button is draggable */
}

.selected-categories {
    border: 1px solid #d5d5d5;
    padding: 30px;
    max-height: 100px;
    overflow-y: auto;
    margin-bottom: 10px;
}

.selected-Tags {
    border: 1px solid #d5d5d5;
    padding: 30px;
    max-height: 100px;
    overflow-y: auto;
    margin-bottom: 10px;
}

#drop-area {
    border: 1px solid #ccc;
    padding: 20px;
    width: 100%;
    text-align: center;
    cursor: pointer;
    border-radius: 10px;
    transition: border 0.3s ease;
    background-color: #F5FAF7;
}

#drop-area.dragover {
    border-color: #000;
}

.drag-drop-label {
    display: block;
    padding: 10px;
    font-size: 16px;
    font-weight: 800;
    cursor: pointer;
   
}

.file-input {
    display: none;
}

#imagePreview {
    margin-top: 10px;
    max-height: 200px;
    display: block;
    margin: 0 auto;
    margin-top: 15px;
}

label#button {
    /* width: 74%; */
    display: inline-block;
    background-color: #008a80;
    color: white;
    padding: 10px 35px 10px 35px;
    border-radius: 27px;
}

.category-label,
.tag-label {
    display: inline-block;
    margin: 5px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    background-color: #F5FAF7;
    color: #3B3B3C;
  
    font-weight: 600;
}

.selected-item {
    display: inline-block;
    background-color: #008b80;
    color: white;
    padding: 9px;
    margin-left: 6px;
    border-radius: 15px;
}

.stickey-section {
    position: sticky;
    top: 85px;
    height: 50vh;
}
.item {
    margin: 5px;
    padding: 5px;
    border: 1px solid #007bff;
    display: inline-block;
    position: relative;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')

<section>
    <div class="row">
        <div class="col-8 col-lg-8">
          
            <div class="card">
                <div class="card-body p-4">

                    <h5 class="mb-4">Edit Blog</h5>
                <form id="editBlogForm" action="{{ route('admin.updateblog') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="blogId" value="{{ $blog->id }}">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="blogimage" class="col-sm-3 col-form-label">Feature Images</label>
                                <div id="drop-area">

                                    <input type="file" id="blogimage" name="blogimage" class="file-input"
                                        accept="image/*" />
                                    <img src="{{ asset('assets/images/drap-drop.png') }}" class="img-fluid" alt="">
                                    <label for="blogimage" class="drag-drop-label">Drag & Drop or Click to
                                        Upload</label>
                                    <p>Only png, jpg and jpeg and image up to 5 mb is allowed.</p>
                                    <label for="blogimage" class="drag-drop-label" id="button">Upload Files</label>

                                    @if ($blog->blogimage)
                                <img id="imagePreview" src="{{ asset( $blog->blogimage) }}" alt="Image Preview" style="display:block; margin-top:10px; max-height: 200px;">
                                <div style="margin-top:10px;" id="imageAction">
                                    <button type="button" id="replaceImage" class="btn btn-warning btn-sm">Replace</button>
                                    <button type="button" id="removeImage" class="btn btn-danger btn-sm">Remove</button>
                                </div>
                            @else
                                <img id="imagePreview" src="#" alt="Image Preview" style="display:none; margin-top:10px; max-height: 200px;">
                                <div style="margin-top:10px; display:none;" id="imageAction">
                                    <button type="button" id="replaceImage" class="btn btn-warning btn-sm">Replace</button>
                                    <button type="button" id="removeImage" class="btn btn-danger btn-sm">Remove</button>
                                </div>
                            @endif
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="blogname" class="col-sm-3 col-form-label">Cover Post *</label>
                                <input type="text" class="form-control" name="blogname" value="{{ $blog->name }}" id="blogname"
                                    placeholder="Add Blog Name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="selectedCategories" class="col-sm-3 col-form-label">Selected Categories</label>
                            <div class="selected-categories" id="selectedCategories" style="border: 1px solid #ddd; padding: 10px; min-height: 100px;">
                                @foreach ($blogCategories as $categoryId)
                                    @php
                                        $category = $categories->firstWhere('id', $categoryId); // Get the category by ID
                                    @endphp
                                    @if ($category)
                                        <div class="selected-item" data-id="{{ $category->id }}">{{ $category->name }}
                                            <span class="remove-item" style="cursor:pointer; color:white;">&times;</span>
                                        </div>
                                        <input type="hidden" name="categories[]" value="{{ $category->id }}">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="selectedTags" class="col-sm-3 col-form-label">Selected Tags</label>
                            <div class="selected-tags" id="selectedTags" style="border: 1px solid #ddd; padding: 10px; min-height: 100px;">
                                @foreach ($blogTags as $tagId)
                                    @php
                                        $tag = $tags->firstWhere('id', $tagId);
                                    @endphp
                                    @if ($tag)
                                        <div class="selected-item" data-id="{{ $tag->id }}">{{ $tag->name }}
                                            <span class="remove-item" style="cursor:pointer; color:white;">&times;</span>
                                        </div>
                                        <input type="hidden" name="tag[]" value="{{ $tag->id }}">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                     

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="description" class="col-sm-3 col-form-label">Blog Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5">{{ $blog->description }}</textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="button" id="updateBtn" class="btn btn-primary px-4">Update</button>
                                    <button type="reset" id="reset" class="btn btn-secondary px-4">Save Draft</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
        <div class="col-4 col-lg-4">
        <div class="stickey-section">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-sm-12 categories">
                            <label for="categories" class="col-form-label">Select Categoreis</label>
                            <hr>
                            <div class="categories-box">
                                @foreach($categories as $category)
                                <div class="category-item" data-id="{{ $category->id }}">
                                <span class="category-label " draggable="true" data-id="{{ $category->id }}">
                                    {{ $category->name }}
                                    <i class="fa fa-pencil edit-category" style="margin-left: 10px; cursor: pointer;" data-id="{{ $category->id }}" title="Edit"></i>
                                    <form class="delete-category-form" data-id="{{ $category->id }}" action="{{ route('category.delete', $category->id) }}" method="POST" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <span class="delete-category-icon" data-id="{{ $category->id }}" style="cursor:pointer;">
                                        <i class="bi bi-trash"></i>
                                    </span>

                                    </span>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#addCategoryModal"><img src="{{ asset('assets/images/Group.svg') }}" class="img-fluid" alt=""> Add Category</button>
</div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-sm-12 categories">
                            <label for="categories" class="col-form-label">Select Tag</label>
                            <hr>
                            <div class="tags-box">
                            @foreach($tags as $tag)
                            <span class="tag-label" draggable="true" data-id="{{ $tag->id }}">
                                {{ $tag->name }}
                                <i class="fa fa-pencil edit-tag" style="margin-left: 10px; cursor: pointer;" data-id="{{ $tag->id }}" title="Edit"></i>
                                <form class="delete-tag-form" data-id="{{ $tag->id }}" action="{{ route('tag.delete', $tag->id) }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <span class="delete-tag-icon" data-id="{{ $tag->id }}" style="cursor:pointer;">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </span>
                        @endforeach
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#addTagModal"><img src="{{ asset('assets/images/Group.svg') }}" class="img-fluid" alt=""> Add Tag</button>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
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


<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCategoryForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="categoryId" name="id">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="saveCategoryButton">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryNames" name="name">
                    </div>
                    <button type="button" id="addCategory" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addTagModal" tabindex="-1" aria-labelledby="addTagModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTagModalLabel">Add Tags</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addTagForm">
                    @csrf
                    <div class="mb-3">
                        <label for="tagName" class="form-label">Tag Name</label>
                        <input type="text" class="form-control" id="tagName" name="name" required>
                    </div>
                    <button type="button" id="addTag" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmTagModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalTagLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalTagLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this tag?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmTagDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editTagModal" tabindex="-1" aria-labelledby="editTagModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTagModalLabel">Edit Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTagForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="tagId" name="tagId">
                    <div class="mb-3">
                        <label for="tagName" class="form-label">Tag Name</label>
                        <input type="text" class="form-control" id="tagNames" name="name" required>
                    </div>
                    <button type="button" id="saveTagButton" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Categoreies Section
$(document).on('click', '#addCategory', function() {
    let categoryName = $('#categoryNames').val().trim();
    console.log("categoriesss>>>", categoryName);
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
        success: function(response) {
            if (response.success) {
                var exists = false;
                $('.categories .form-check').each(function() {
                    if ($(this).find('label').text().trim() === response.category.name) {
                        exists = true;
                        return false;
                    }
                });

                if (!exists) {
                    $('.categories-box').prepend(
                        `<div class="category-item" data-id="${response.category.id}">
                            <span class="category-label" draggable="true" data-id="${response.category.id}">
                                ${response.category.name}
                                <i class="fa fa-pencil edit-category" style="margin-left: 10px; cursor: pointer;" data-id="${response.category.id}" title="Edit"></i>
                                <span class="delete-category-icon" data-id="${response.category.id}" style="cursor:pointer;">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </span>
                        </div>`
                    );
                    toastr.success('Category added successfully.');

                    $('#categoryNames').val('');
                } else {
                    toastr.info(response.message);
                }

                $('#addCategoryModal').modal('hide');
            } else {
                toastr.info(response.message);
            }
        },
        error: function(xhr) {
            toastr.error('An error occurred. Please try again.');
        }
    });
});



$(document).on('click', '.delete-category-icon', function () {
    const categoryId = $(this).data('id'); 
    $('#confirmModal').modal('show'); 
    
    $('#confirmDeleteBtn').off('click').on('click', function () {
        $.ajax({
            url: `/category/${categoryId}`, 
            type: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                if (response.status === 'true') {
                    toastr.success('Category deleted successfully.');
                    $(`.category-label[data-id="${categoryId}"]`).remove(); 
                    $(`.selected-categories div[data-id="${categoryId}"]`).remove();

                } else {
                    toastr.error(response.message); 
                }
            },
            error: function (xhr) {
                toastr.error('An error occurred while deleting the category.');
            }
        });

        $('#confirmModal').modal('hide'); 
    });
});


$(document).on('click', '.edit-category', function () {
    const categoryId = $(this).data('id');
    console.log("categoryies>>>>", categoryId)
    const categoryName = $(this).closest('.category-item').find('.category-label').contents().filter(function() {
        return this.nodeType === Node.TEXT_NODE;
    }).text().trim();
    console.log("categoryname>>>>", categoryName);
    $('#categoryId').val(categoryId);
    $('#categoryName').val(categoryName);

    $('#editCategoryModal').modal('show');
});

$(document).ready(function () {
    $('#saveCategoryButton').on('click', function () {
    const formData = $('#editCategoryForm').serialize(); 
    const categoryId = $('#categoryId').val(); 

    $.ajax({
        url: `/category/${categoryId}`, 
        type: 'PUT',
        data: formData,
        success: function (response) {
            if (response.status === 'true') {
                toastr.success(response.message);

                $(`.category-label[data-id="${categoryId}"]`).html(`
                    ${$('#categoryName').val()}
                    <i class="fa fa-pencil edit-category" style="margin-left: 10px; cursor: pointer;" data-id="${categoryId}" title="Edit"></i>
                    <span class="delete-category-icon" data-id="${categoryId}" style="cursor:pointer;">
                        <i class="bi bi-trash"></i>
                    </span>
                `);
                $('#editCategoryForm')[0].reset();
                $('#editCategoryModal').modal('hide');
            } else {
                toastr.error(response.message); 
            }
        },
        error: function (xhr) {
            toastr.error('An error occurred while updating the category.');
        }
    });
});

});


/// Tag Section 



$(document).on('click', '#addTag', function() {
    var tagName = $('#tagName').val().trim();

    if (!tagName) {
        toastr.warning('Tag name cannot be empty.');
        return;
    }

    $.ajax({
        url: '{{ route("tag.store") }}',
        type: 'POST',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'name': tagName
        },
        success: function(response) {
            if (response.success) {
                var exists = false;
                $('.tags-box  .form-check').each(function() {
                    if ($(this).find('label').text().trim() === response.tag.name) {
                        exists = true;
                        return false; 
                    }
                });

                if (!exists) {
                    $('.tags-box').prepend(
                `<span class="category-label" draggable="true" data-id="${response.tag.id}">
                    ${response.tag.name}
                    <i class="fa fa-edit edit-tag" style="margin-left: 10px; cursor: pointer;" data-id="${response.tag.id}" title="Edit"></i>
                    <form class="delete-tag-form" data-id="${response.tag.id}" action="/tag/${response.tag.id}" method="POST" style="display:none;">
                        <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                        @method('DELETE')
                    </form>
                    <span class="delete-tag-icon" data-id="${response.tag.id}" style="cursor:pointer;">
                        <i class="bi bi-trash"></i>
                    </span>
                </span>`
            );


                    toastr.success('Tags added successfully.');
                } else {
                    toastr.info('Tag already exists.');
                }

                $('#addTagModal').modal('hide');
            } else {
                toastr.info(response.message);
            }
        },
        error: function(xhr) {
            toastr.error('An error occurred. Please try again.');
        }
    });

})
$(document).on('click', '.edit-tag', function() {
    const tagId = $(this).data('id');
    const tagName = $(this).closest('.tag-label').text().trim(); // Get the tag name
    console.log("tagName>>>>>>", tagName)
    $('#tagId').val(tagId); 
    $('#tagNames').val(tagName);

    $('#editTagModal').modal('show'); // Show the edit modal
});

$(document).ready(function () {

let tagIdToDelete;

$(document).on('click', '.delete-tag-icon', function() {
    tagIdToDelete = $(this).data('id'); 
    $('#confirmTagModal').modal('show'); 
});

$(document).on('click', '#confirmTagDeleteBtn', function() {
    $.ajax({
        url: `/tag/${tagIdToDelete}`, 
        type: 'DELETE',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.status === 'true') {
                $(`.tag-label[data-id="${tagIdToDelete}"]`).remove();
                toastr.success(response.message); 
            } else {
                toastr.error(response.message); 
            }
        },
        error: function(xhr) {
            toastr.error('An error occurred while deleting the tag.');
        }
    });

    $('#confirmTagModal').modal('hide'); 
});

$('#saveTagButton').on('click', function () {
    const formData = $('#editTagForm').serialize(); 
    const tagId = $('#tagId').val(); 

    $.ajax({
        url: `/tag/${tagId}`, 
        type: 'PUT',
        data: formData,
        success: function (response) {
            if (response.status === 'true') {
                toastr.success(response.message);

                $(`.tag-label[data-id="${tagId}"]`).html(`
                    ${$('#tagNames').val()}
                    <i class="fa fa-edit edit-tag" style="margin-left: 10px; cursor: pointer;" data-id="${tagId}" title="Edit"></i>
                    <span class="delete-tag-icon" data-id="${tagId}" style="cursor:pointer;">
                        <i class="bi bi-trash"></i>
                    </span>
                `);
                $('#editTagForm')[0].reset();
                $('#editTagModal').modal('hide');
            } else {
                toastr.error(response.message); 
            }
        },
        error: function (xhr) {
            toastr.error('An error occurred while updating the tag.');
        }
    });
});

});


$(document).ready(function() {
    tinymce.init({
        selector: '#description',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });

    $('#reset').on('click', function(e) {
        e.preventDefault();
        $('#addBlogForm input').val('');
        $('#addBlogForm input[type="checkbox"]').prop('checked', false);
        tinymce.get('description').setContent('');
        $('#selectedCategories').empty();
        $('#bsValidation13').val('');
    });

    $('#blogimage').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').attr('src', e.target.result);
            $('#imagePreview').show();
            $('#imageAction').show();
        };
        reader.readAsDataURL(this.files[0]);
    });

    $('#replaceImage').on('click', function() {
        $('#blogimage').click();
    });

    $('#removeImage').on('click', function() {
        $('#imagePreview').hide();
        $('#imageAction').hide();
        $('#blogimage').val('');
    });


    $(document).ready(function() {
    $('.category-label').on('dragstart', drag);
    $('.tag-label').on('dragstart', drag);

    $('.selected-categories').on('dragover', allowDrop).on('drop', dropCategory);
    $('.selected-tags').on('dragover', allowDrop).on('drop', dropTag);
});

function drag(event) {
    const target = event.target;
    console.log('Dragging:', target.dataset.id);

    if (event.originalEvent.dataTransfer) {
        event.originalEvent.dataTransfer.setData("text/plain", target.dataset.id);
        event.originalEvent.dataTransfer.setData("type", target.classList.contains('category-label') ?
            'category' : 'tag');
    } else {
        console.error("dataTransfer is not available on this event.");
    }
}

function allowDrop(event) {
    event.preventDefault();
}

function dropCategory(event) {
    event.preventDefault();

    const id = event.originalEvent.dataTransfer.getData("text/plain");
    const type = event.originalEvent.dataTransfer.getData("type");

    if (type !== 'category') {
        alert('You can only drop categories into the Categories section.');
        return;
    }

    const name = $(`.category-label[data-id="${id}"]`).text();
    if (!addSelectedItem('selectedCategories', id, name)) {
        alert('This category is already added.');
    } else {
        addHiddenInput('categories', id);
    }
}

function dropTag(event) {
    event.preventDefault();

    const id = event.originalEvent.dataTransfer.getData("text/plain");
    const type = event.originalEvent.dataTransfer.getData("type");

    if (type !== 'tag') {
        alert('You can only drop tags into the Tags section.');
        return;
    }

    const name = $(`.tag-label[data-id="${id}"]`).text();
    if (!addSelectedItem('selectedTags', id, name)) {
        alert('This tag is already added.');
    } else {
        addHiddenInput('tag', id);
    }
}

function addHiddenInput(type, id) {
    console.log(`Adding hidden input for ${type}: ${id}`);

    $(`#editBlogForm`).append(`<input type="hidden" name="${type}[]" value="${id}">`);
}

function removeHiddenInput(type, id) {
    $(`input[name="${type}[]"][value="${id}"]`).remove();
}

function addSelectedItem(containerId, id, name) {
    if ($(`#${containerId} div[data-id="${id}"]`).length === 0) {
        $(`#${containerId}`).append(
            `<div class="selected-item" data-id="${id}">${name} 
            <span class="remove-item" style="cursor:pointer; color:white;">&times;</span></div>`
        );
        return true;
    }
    return false;
}

$(document).on('click', '.remove-item', function() {
    const parentDiv = $(this).parent();
    const id = parentDiv.data('id');

    const containerId = parentDiv.parent().attr('id');

    const type = containerId === 'selectedCategories' ? 'categories' : 'tag';

    removeHiddenInput(type, id);
    parentDiv.remove();
});

$('.category-label').on('touchstart', drag);
$('.tag-label').on('touchstart', drag);





    $('#updateBtn').on('click', function(e) {
            e.preventDefault();
            tinymce.triggerSave();

    if ($('#editBlogForm')[0].checkValidity() === false) {
        e.stopPropagation();
        $('#editBlogForm').find(':input[required]').each(function() {
            if (!this.validity.valid) {
                $(this).addClass('is-invalid');
                $(this).focus();
                return false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
    } else {
        var formData = new FormData($('#editBlogForm')[0]);
        console.log('Form Data:', Object.fromEntries(formData));  

        $.ajax({
            url: $('#editBlogForm').attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === "true") {
                    toastr.success(response.message);
                   

                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr) {
                toastr.error('An error occurred. Please try again.');
            }
        });
    }
});






});
</script>


@push('pageScript')
@endpush