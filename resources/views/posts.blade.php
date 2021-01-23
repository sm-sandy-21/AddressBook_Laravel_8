<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>  
    <section style="padding-top:60ps;">

        <div class="container">
          <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Address Book</a>
          
            
          </form>
        </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                         <a href="/add-post" class="btn btn-success">Add New Post</a>
                      </div>
                      <div class="card-body">
                          @if(Session::has('post_delete'))
                            <div class="alert alert-danger" role ="alert">
                            {{Session::get('post_delete')}}
                            </div>

                          @elseif(Session::has('post_created'))
                            <div class="alert alert-success" role ="alert">
                            {{Session::get('post_created')}}
                            </div>
                          @elseif(Session::has('post_update'))
                            <div class="alert alert-primary" role ="alert">
                            {{Session::get('post_update')}}
                            </div>                   
                          @endif

                       <table class="table table-striped">
                         <thead>
                             <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Phone</th>                                                        
                               <th>Action</th>                                                        
                            </tr>
                         </thead>
                         <tbody>
                          @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->Uname}}</td>
                                <td>{{$post->Uemail}}</td>
                                <td>{{$post->Uphone}}</td>
                                <td>
                                <a href="/posts/{{$post->id}}" class ="btn btn-info">Details</a>
                                <a href="/edit-post/{{$post->id}}" class ="btn btn-outline-info">Edit</a>
                                <a href="/delete-post/{{$post->id}}" class ="btn btn-danger">Delete</a>
                                
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                       </table>
                      
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>