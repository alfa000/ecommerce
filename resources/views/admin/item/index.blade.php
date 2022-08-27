@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-0">Item</h5>
            </div>
            <div>
                <a href="{{ route('item.create') }}" class="btn btn-primary">+ Add Item</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped w-100 datatables">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Price</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id }}</td>
                            <td><img src="{{ asset('storage/'.$item->img) }}" width="100px" alt="" /></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <a href="{{ route('item.edit', $item->id) }}" data-toggle="tooltip" class="btn btn-warning btn-sm text-light" title="Edit"><i class="ti ti-pencil"></i></a>
                                <a href="{{ route('item.destroy', $item->id) }}" data-toggle="tooltip" class="btn btn-danger btn-sm btn-hapus text-light" title="Hapus"><i class="ti ti-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--end container-->

@endsection

@push('scripts')
<script>
    @if (session('success'))
        Swal.fire('Sukses', '{{ session("success") }}', 'success')
    @endif
</script>
@endpush
