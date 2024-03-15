@include('partials.html')

<form class="mt-5" method="POST" action="/store">
    @csrf
    <div class="form-group">
      <label for="name" class="mb-3">name</label>
      <input type="name" name="name" class="form-control mb-3" id="name" placeholder="Enter email" required/>
     
    </div>
    <div class="form-group">
        <label for="debts" class="mb-3">debts</label>
        <input type="name" name="debts" class="form-control mb-3" id="debts" placeholder="Enter email" required/>
       
      </div>
      <div class="form-group">
        <label for="deadline" class="mb-3">deadline</label>
        <input type="date" name="deadline" class="form-control mb-3" id="deadline" placeholder="Enter email" required/>
       
       
      </div>
     
   
    <button type="submit" class="btn btn-primary">Submit</button>



   








  </form>