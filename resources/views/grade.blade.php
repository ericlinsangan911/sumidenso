@extends('layout.master')
@section('title', 'Index')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Adding of Grades and Subject</h1>
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
                    <form action="{{ route('addGrade') }}" method="POST" class="forms-sample">
                    @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <label for="name" class="col-md-3 col-form-label">Grades</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade" value="{{old('grade')}}">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="name" class="col-md-3 col-form-label">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{old('subject')}}">
                                    </div>
                            </div>
                        </div>
                        
                    
                        <div class="card-footer mt-3">
                            <button type="submit" class="btn btn-info float-right">Submit</button>
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
            
                    <div class="card-body">
                    <h3>Grades and subject</h3>
                        <div class="table-responsive">
                            <table style="width: 100%;" id="" class="table table-hover table-striped table-bordered  remarksTable">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($grade as $x)
                                    <tr>
                                        <td>{{$x->grade}}</td>
                                        <td>{{$x->subject}}</td>
                                     

                                       
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



