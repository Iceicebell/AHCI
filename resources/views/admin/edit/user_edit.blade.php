<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('patch') }}
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalEdit{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit user') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Name') }}:</strong>
                            {!! Form::text('name', $user->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Email') }}:</strong>
                            {!! Form::text('email', $user->email, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Role') }}:</strong>
                            {!! Form::select('role', ['admin' => 'Admin', 'trainee' => 'Trainee','coordinator' => 'Coordinator'], $user->role, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-warning">{{ __('Edit') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
