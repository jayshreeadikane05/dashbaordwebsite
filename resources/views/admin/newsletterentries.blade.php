@extends('admin.layout')
@section('title', 'NewsLetter Entries')

@push('styles')
<style>
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
    NewsLetter Entries
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Export Data 
        </button>
        
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('admin.exportNewsletter', ['type' => 'excel']) }}">Export as Excel</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.exportNewsletter', ['type' => 'pdf']) }}">Export as PDF</a></li>
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

        <div id="newsletter-table" class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th>Email</th>
                      
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($NewsletterFormentries as $newsletter)
                        <tr>
                        
                            <td>{{ $newsletter->email }}</td>
                         
                            <td>{{ $newsletter->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="pagination-links" class="d-flex justify-content-between align-items-center">
            <div>
                Showing {{ $NewsletterFormentries->firstItem() }} to {{ $NewsletterFormentries->lastItem() }} of {{ $NewsletterFormentries->total() }} entries
            </div>
            <div>
                {{ $NewsletterFormentries->appends(['search' => request('search'), 'per_page' => request('per_page')])->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
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
            
            $.ajax({
                url: '{{ route("admin.newsletterentries") }}',
                type: 'GET',
                data: { search: query, per_page: perPage },
                success: function(response) {
                    $('#newsletter-table').html($(response.html).find('#newsletter-table').html());
                    $('#pagination-links').html($(response.html).find('#pagination-links').html());
                },
                error: function(xhr) {
                    console.log('An error occurred: ' + xhr.responseText);
                }
            });
        }
    });
</script>
@push('pageScript')
@endpush
