@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hotels
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Hotel Name</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                        foreach($hotelslist as $hotel){
                                       ?>
                                        <tr>
                                            <td>{{ $hotel->name }}</td>
                                            <td>{{ $hotel->city }}</td>
                                            <td><a href="{{ url('/comments/'.$hotel->id) }}">View Comments</a> | <a href="{{ url('/addcomments/'.$hotel->id) }}">Add Comments</a></td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
