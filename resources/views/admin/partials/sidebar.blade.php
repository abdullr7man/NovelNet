<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
        Dashboard
    </a>
    <a href="{{ route('admin.books.index') }}" class="list-group-item list-group-item-action">
        Books
    </a>
    <a class="list-group-item list-group-item-action" href="{{ route('authors.index') }}">
        Authors
    </a>
    <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
        Users
    </a>
    <a href="{{ route('admin.borrowed.index') }}" class="list-group-item list-group-item-action">
        Borrowed Books
    </a>
</div>
