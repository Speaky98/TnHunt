@extends("layouts.Dashboard.admin")
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Programme de chasse</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Programme de chasse</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
          <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Striped Full Width Table</h3>
                                @csrf

                                <a href="{{ url('/progchasse/create') }}" class="btn btn-success btn-sm ml-5" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter un nouveau programme
                                 </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                           
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Nombre de personnes</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th>Capacité</th>
                                        <th style="width: 40px">Label</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ProgChasse as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->numpeople }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->costs }} dt</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">55%</span></td>
                                        <td>
                                            <a href="{{ url('/progchasse/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/progchasse/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/progchasse' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
</div>
@endsection
