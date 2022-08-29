<form action="{{ route("works.edit", ["id" => $work -> id]) }}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name="name" placeholder="Nhập công việc" value="{{ $work -> name }}">
    <button>Save</button>
</form>