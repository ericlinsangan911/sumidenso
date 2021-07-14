@extends('layout.master')
@section('title', 'Index')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Adding of Animals</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
              
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                          {{ session()->get('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Whoops!</strong> There were some problems with your input.

                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content pt-4">
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('addAnimals') }}" method="POST" class="forms-sample">
                    @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <label for="name" class="col-md-3 col-form-label">Animal Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Animal Name" value="{{old('name')}}">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="name" class="col-md-3 col-form-label">Animal Kind</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="kind" name="kind" placeholder="Animal Kind" value="{{old('kind')}}">
                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                    <label for="name" class="col-md-3 col-form-label">Animal Status</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="status" name="status" placeholder="Animal Status" value="{{old('status')}}">
                                    </div>
                            </div>
                        </div>
                        
                    
                        <div class="card-footer mt-3">
                            <button type="submit" class="btn btn-info float-right">Add Animal</button>
                        </div>
                    </form>
              
                            <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </section>
        <section class="content pt-4">
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="col-md-12">
                <div class="card">
                    <a href="{{ route('flyAnimals') }}" class="btn btn-info">Fly</a>
                    <a href="{{ route('runAnimals') }}" class="btn btn-primary">Run</a>
                    <div class="card-body">
                    <h3>STATUS/REMARKS HISTORY</h3>
                        <div class="table-responsive">
                            <table style="width: 100%;" id="" class="table table-hover table-striped table-bordered  remarksTable">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>KIND</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($animals as $x)
                                    <tr>
                                        <td>{{$x->name}}</td>
                                        <td>{{$x->kind}}</td>
                                       @if($x->status == 'Running')
                                       <td style="color:red">{{$x->status}}</td>
                                       @else
                                       <td style="color:green">{{$x->status}}</td>
                                       @endif


                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </section>
    </div>
@endsection
@section('modals')



@endsection
@push('pagejs')
<script type="text/javascript">
   
   
</script>
@endpush



