@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sửa Phiếu Mượn</h1>

    <form action="{{ route('borrowings.update', $borrowing->borrowings) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="bookid">Chọn Sách:</label>
            <select name="bookid" id="bookid" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->bookid }}" {{ $book->bookid == $borrowing->bookid ? 'selected' : '' }}>
                        {{ $book->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="memberid">Mã Thành Viên:</label>
            <input type="number" name="memberid" id="memberid" class="form-control" value="{{ $borrowing->memberid }}" required>
        </div>

        <div class="form-group">
            <label for="borrowingsdate">Ngày Mượn:</label>
            <input type="date" name="borrowingsdate" id="borrowingsdate" class="form-control" value="{{ $borrowing->borrowingsdate }}" required>
        </div>

        <div class="form-group">
            <label for="duedate">Ngày Hạn:</label>
            <input type="date" name="duedate" id="duedate" class="form-control" value="{{ $borrowing->duedate }}" required>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
