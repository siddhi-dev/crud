<html>
    <table border="1px">  
        <thead>  
        <tr>  
        <td>  
        ID </td>  
        <td>  
        First Name </td>  
        <td>  
        email</td>  
        
        </tr>  
        </thead>  
        <tbody>  
        @foreach($cruds as $crud)  
                <tr border="none">  
                    <td>{{$loop->index +1}}</td>  
                    <td>{{$crud->name}}</td>  
                    <td>{{$crud->email}}</td>  
                   
        <td >  
        <form action="{{ route('delete', $crud->id) }} " method="post">  
                          @csrf  
                          {{-- @method('DELETE')  --}}
                          <button class="btn btn-danger" type="submit">Delete</button>  
                        </form>  
        </td>  
        <td >  
        <form action="{{ route('user_edit',$crud->id) }}" method="get">  
                          @csrf  
                           
                          <button class="btn btn-danger" type="submit">Edit</button>  
                        </form>  
        </td>  
          
                 </tr>  
        @endforeach  
        </tbody>  
        </table>
         </html> 
 