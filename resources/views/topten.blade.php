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
                    
                    <h3 class="card-title">Top 10 Most Famous Author Order By Vote</h3>
                <div class="card-body">
                

                <div class="card-body">
                    <br/>
                    
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Author Name</th>
                                <th>Voter</th>
                            </tr>
                            <?php $no=1; ?>
                            @foreach ( $top as $top )
                            <tr class="text-center">
                              @php $key=1;
                              @endphp
                              <td>{{ $no++ }}</td>
                              <td>{{$top->author_name}}</td>
                              <td>{{$top->voter}}</td>
                              </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>

                    <div>
                      <a href="{{ route('listbook.index')}}" class="btn btn-primary btn-success" ata-toggle="tooltip" data-placement="top" title="Hapus">
                        <i class="fas fa-trash-alt" style="font-size: 18px;">Back To ListBook</i> 
                      </a>
                    </div>
               
                </div>
            </div>
        </div>
    </body>
</html>