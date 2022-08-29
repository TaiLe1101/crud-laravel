<form action="{{ route("works.store") }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nhập công việc">
    <button type="submit" >Add</button>
</form>