@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm Phiếu Mượn</h1>

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="bookid">Chọn Sách:</label>
            <select name="bookid" id="bookid" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->bookid }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="memberid">Mã Thành Viên:</label>
            <input type="number" name="memberid" id="memberid" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="borrowingsdate">Ngày Mượn:</label>
            <input type="date" name="borrowingsdate" id="borrowingsdate" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="duedate">Ngày Hạn:</label>
            <input type="date" name="duedate" id="duedate" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
