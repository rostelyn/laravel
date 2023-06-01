@section('content')
   <h1>Welcome to Contact Page</h1>
   <form action="{{route('contact.submit')}}" method="POST"></form>
   @csrf

   <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
   </div>

   <div>
    <label for="name">Email Address</label>
    <input type="text" name="email" id="email">
   </div>

</html>