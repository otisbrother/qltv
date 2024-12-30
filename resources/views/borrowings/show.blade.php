@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chi Tiết Phiếu Mượn</h1>

    <p><strong>Mã Phiếu Mượn:</strong> {{ $borrowing->borrowings }}</p>
    <p><strong>Tên Sách:</strong> {{ $borrowing->book->title }}</p>
    <p><strong>Mã Thành Viên:</strong> {{ $borrowing->memberid }}</p>
    <p><strong>Ngày Mượn:</strong> {{ $borrowing->borrowingsdate }}</p>
    <p><strong>Ngày Hạn:</strong> {{ $borrowing->duedate }}</p>
    <p><strong>Ngày Trả:</strong> {{ $borrowing->returnedDate ?? 'Chưa trả' }}</p>

    <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Quay lại</a>
</div>
@endsection
