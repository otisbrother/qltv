@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh Sách Phiếu Mượn</h1>
    <a href="{{ route('borrowings.create') }}" class="btn btn-primary mb-3">Thêm Phiếu Mượn</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Mã Phiếu Mượn</th>
                <th>Tên Sách</th>
                <th>Mã Thành Viên</th>
                <th>Ngày Mượn</th>
                <th>Ngày Hạn</th>
                <th>Ngày Trả</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->borrowings }}</td>
                    <td>{{ $borrowing->book->title }}</td>
                    <td>{{ $borrowing->memberid }}</td>
                    <td>{{ $borrowing->borrowingsdate }}</td>
                    <td>{{ $borrowing->duedate }}</td>
                    <td>{{ $borrowing->returnedDate ?? 'Chưa trả' }}</td>
                    <td>
                        <a href="{{ route('borrowings.show', $borrowing->borrowings) }}" class="btn btn-info">Chi Tiết</a> <!-- Nút chi tiết -->
                        <a href="{{ route('borrowings.edit', $borrowing->borrowings) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('borrowings.destroy', $borrowing->borrowings) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $borrowings->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa phiếu mượn này?');
    }
</script>
@endsection
