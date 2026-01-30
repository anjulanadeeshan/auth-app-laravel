<h2>Dashboard</h2>
<p>welcome {{Auth::user()->name}}</p>
<form method="POST" action="{{route('logout')}}">
    @csrf 
    <button type="submit">logout</button>
</form>