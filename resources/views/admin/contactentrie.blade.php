@extends('admin.layout')
@section('title', 'Contact Entries')
@section('breadcrumb', 'Contact')

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

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .no-data {
        text-align: center;
        font-size: 1.5rem;
        margin-top: 20px;
        display: none;
    }
    th {
            font-weight: 600;
        }
        td {
            color: #727070 !important;
        }
</style>
@endpush

@section('content')

<section>
<h6 class="mb-0 text-uppercase d-flex justify-content-between align-items-center">
    Contact Entries
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Export Data 
        </button>
        
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('admin.export', ['type' => 'excel']) }}">Export as Excel</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.export', ['type' => 'pdf']) }}">Export as PDF</a></li>
        </ul>
    </div>
</h6>
<hr>
<div class="card">
    <div class="card-body">
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
    <input type="text" id="search" class="form-control" style="width: 20%;" placeholder="Search by name or email" value="{{ request('search') }}">
</div>

        <div id="contact-table" class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Here About</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ContactFormentries as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->hereabout }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data not available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div id="pagination-links" class="d-flex justify-content-between align-items-center">
            <div>
                Showing {{ $ContactFormentries->firstItem() }} to {{ $ContactFormentries->lastItem() }} of {{ $ContactFormentries->total() }} entries
            </div>
            <div>
                {{ $ContactFormentries->appends(['search' => request('search'), 'per_page' => request('per_page')])->links('vendor.pagination.bootstrap-4') }}
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
        $('#search').on('keyup', function() {
            fetchEntries();
        });

        $('#per-page').on('change', function() {
            fetchEntries();
        });

        function fetchEntries() {
            let query = $('#search').val();
            let perPage = $('#per-page').val();
            $('#loader').show();
            $('#contact-table').hide();
            $('#pagination-links').hide();
            $('#no-data').hide();

            $.ajax({
                url: '{{ route("admin.contactentrie") }}',
                type: 'GET',
                data: { search: query, per_page: perPage },
                success: function(response) {
                    $('#loader').hide();
                    $('#contact-table').html($(response.html).find('#contact-table').html()).show();
                    $('#pagination-links').html($(response.html).find('#pagination-links').html()).show();

                    if ($('#contact-table tbody tr').length === 0) {
                        $('#no-data').show();
                       
                    }
                },
                error: function(xhr) {
                    $('#loader').hide();
                    $('#contact-table').hide();
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
