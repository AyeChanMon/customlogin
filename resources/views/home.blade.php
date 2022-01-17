
<h1>This is Home</h1>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>