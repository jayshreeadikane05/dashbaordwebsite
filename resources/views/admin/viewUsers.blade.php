@extends('admin.layout')
@section('title', 'User')
@section('breadcrumb', 'User')

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
    color: white;
}
</style>
@endpush

@section('content')

<section>
    <h6 class="mb-0 text-uppercase d-flex justify-content-between align-items-center">
        All Users
        <div class="btn-group mb-3">
            <a href="{{ route('admin.createUser') }}" style="color:#fff;">
                <button type="button" class="btn blogadd">

Add Admin
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


        <div id="blog-table" class="table-responsive mb-2">
            <table id="userTable" class="table">
    <thead>
        <tr>
        <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Role</th>
                <th>Create At</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile_no }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>

        @endforeach
    </tbody>
</table>
            </div>
            <div id="pagination-links" class="d-flex justify-content-between align-items-center">
    <div>
        Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
    </div>
    <div>
        {{ $users->appends(['per_page' => request('per_page')])->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

<div class="loader" id="loader"></div>
<div class="no-data" id="no-data">Data not available</div>
        </div>
    </div>

</section>




@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

    if ($.fn.DataTable.isDataTable('#userTable')) {
        $('#userTable').DataTable().destroy();
    }

    var table = $('#userTable').DataTable({
        "paging": false,
        "searching": true,
        "ordering": true,
        "info": false
    });
  
});
</script>
@push('pageScript')
@endpush