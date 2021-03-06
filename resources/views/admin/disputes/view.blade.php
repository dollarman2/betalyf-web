@extends('admin.partials.app')

@section('extra_style')
    
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="caption">
                    <i class="icon-envelope font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">{{ $dispute->ticket_no }}</span>
                    <span class="badge badge-{{ dispute_status($dispute->status,'class') }}">{{ dispute_status($dispute->status,'name') }}</span>
                </div>Dispute - {{ $dispute->ticket_no }}
                <div class="actions"></div>
            </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-news font-white bg-blue">
                                    <div class="list-head-title-container">
                                        <h4 class="list-title">Ticket Information</h4>
                                    </div>
                                </div>
                                
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        {{ $dispute->ticket_no }} - {{ $dispute->title }} 
                                        <span class="badge badge-{{ dispute_status('class',$dispute->status) }}">{{ dispute_status('name', $dispute->status) }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Submitted:</strong><br/>
                                        {{ $dispute->created_at }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Last Updated:</strong><br/>
                                        {{ $dispute->updated_at }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Priority:</strong><br/>
                                        {{ $dispute->priority->name }}
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"><i class="fa fa-pencil"></i> Reply</button>
                                    <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-close"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-7'>
                        <div class="panel-group accordion" id="accordion3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"><i class="fa fa-pencil"></i> Reply </a>
                                    </h4>
                                </div>
                                <div id="collapse_3_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input class="form-control" type="text" id="name" value="{{ \Auth::user()->Profile->name }}" disabled/> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address<span class="required">*</span></label>
                                                        <input class="form-control" type="email" id="email" value="{{ \Auth::user()->email}}" disabled/> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Message <span class="required">*</span></label>
                                                <textarea class="form-control" style="height:50px;" id="editor1"></textarea> 
                                            </div>
                                            <hr/>
                                            <div id="errors"></div> 
                                            <img src="{{ asset('images/loader.gif') }}" id="loader" /> 
                                            <button type="button" class="btn green" id="create_new_dispute_btn" disabled> Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($replies as $reply)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-user"></i> <strong></strong> (Client) 
                                    <span class="pull-right"></span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                        @endforeach
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-user"></i> <strong>{{ $dispute->user->Profile->name }}</strong> (Client) 
                                    <span class="pull-right" style="font-size:12px;">{{ $dispute->created_at }}</span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php echo htmlspecialchars_decode($dispute->message); ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div> 
@endsection
@section('extra_script')
    <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
@endsection
@section('after_script')
    <script src="{{ asset('assets/pages/scripts/profile.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/ui-sweetalert.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script> 
    <script>
        tinymce.init({
            selector: '#editor1',
            height: 300,
            theme: 'modern',
            plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
              { title: 'Test template 1', content: 'Test 1' },
              { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
    <script>
        var SEND = "{{ URL::route('disputeAdd') }}";
        var TOKEN = "{{ csrf_token() }}";
        var GET_DETAILS = "{{ URL::route('getDispute') }}";
    </script>
    <script src="{{ asset('js/pages/disputes.js') }}"></script>
@endsection
