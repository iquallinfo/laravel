@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Comments
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>                                            
                                            <th>User Name</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                        foreach($comments as  $comment){
                                       ?>
                                        <tr>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->comments }}</td>   
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
