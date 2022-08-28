@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-0">Transaction</h5>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped w-100 datatables">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Checkout Date</th>
                        <th scope="col">User</th>
                        <th scope="col">Proof of Payment</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->checkout_date }}</td>
                            <td>{{ $transaction->name }}</td>
                            <td><img src="{{ asset('storage/'.$transaction->pop) }}" width="100px" alt="" /></td>
                            <td>Rp.{{ $transaction->total }}</td>
                            <td class="text-uppercase">{{ $transaction->status }}</td>
                            <td>
                                <a href="{{ route('transaction.update', $transaction->id) }}" data-toggle="tooltip" class="btn btn-success btn-sm text-light" title="Approve & Upadte Status"><i class="ti ti-check"></i></a>
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
