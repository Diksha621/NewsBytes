<!DOCTYPE html>
<html>
<head>
    <title>Url Hashing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <h1>News Bytes Url Hash</h1>
   
    <div class="card">
        <div class="card-header">
            <form method="POST" action="{{ route('create.hash.link') }}">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="link" class="form-control" placeholder="Enter URL">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Generate Hash Link</button>
                  </div>
                </div>
            </form>
        </div>
        <div class="card-body">
   
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            @if(Session::has('failed'))
                <div class="alert alert-danger">
                    <p>{{ Session::get('failed') }}</p>
                </div>
            @endif
   
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hash Link</th>
                        <th>Original Url</th>
                        <th>User Ip</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($links))
                        @foreach($links as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td><a href="{{ route('hash.link', $row->hash) }}" target="_blank">{{ route('hash.link', $row->hash) }}</a></td>
                                <td>{{ $row->link }}</td>
                                <td>{{ $row->ip_address }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
   
</div>
    
</body>
</html>