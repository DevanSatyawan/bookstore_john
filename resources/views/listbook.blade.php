<!DOCTYPE html>
<html>
 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
  
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    
                    <h3 class="card-title">Welcome to Jhon Doe Book Store</h3>
                <div class="card-body">
                    <form action="{{ route('listbook.search') }}" method="get">
                      <div class="input-group input-group-sm" style="width: 200px;">
                        <input type="text" name="cari" class="form-control float-right" placeholder="Search Book">
                        </a></p>
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                
                      </div>
                      <div>
                        <a href="{{ route('listbook.ten')}}" class="btn btn-primary btn-danger" ata-toggle="tooltip" data-placement="top" title="Hapus">
                          <i class="fas fa-plus" style="font-size: 18px;"></i> Top 10 most Famous Author </a></p>
                        </a>
                      </div>
                <div class="dropdown">
                    <button class="btn btn-primary btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      List Shown
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>

                <div class="card-body">
                    <br/>
                    
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Book Name</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Average Rating</th>
                                <th>Voter</th>
                            </tr>
                            <?php $no=1; ?>
                            @foreach ( $list as $list )
                            <tr class="text-center">
                              @php $key=1;
                              @endphp
                              <td>{{ $no++ }}</td>
                              <td>{{$list->bookname}}</td>
                              <td>{{$list->category_name}}</td>
                              <td>{{$list->author_name}}</td>
                              <td>{{$list->average_rating}}</td>
                              <td>{{$list->voter}}</td>
                              </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>

               
                </div>
            </div>
        </div>
    </body>
</html>