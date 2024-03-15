@include('partials.html')


<div class="p-5">
    <button class="btn  btn-success"><a href="/form">Add</a></button>
</div>

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            
                
         @foreach ($debt as $a)
        
          <tr>
            <th scope="row"></th>
            <td>{{ $a->name }}</td>
            <td>{{ $a->debts }}</td>
            <td>{{ $a->deadline }}</td>
            <td> <a href="/{{ $a->id }}/edit"><button class="btn btn-info">Edit</button></a></td>
            <td>
            <form action="/update/{{ $a->id }}" method="POST">
              @csrf
              @method('delete')
              <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
