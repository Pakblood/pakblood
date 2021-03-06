@include('header')
@include('search_bar')
<!-- Center Container-->
<div class="row center-container">
    <div class="row">
        <div>
            {!! Form::open(array('url' => '/contact','class' => 'small-20 medium-10 large-10 columns','style' => 'margin: auto 25%;')) !!}
            <h5 style="color: red;">Contact Us</h5>
            @if (count($errors) > 0)
                <div class="row">
                    @foreach ($errors->all() as $error)
                        <small class="error small-20 medium-14 large-20 columns">{{ $error }}</small>
                    @endforeach
                </div>
            @endif
            @if(Session::get('message') != NULL)
                @if((Session::has('type')) && (Session::get('type')=='success'))
                    <div data-alert class="alert-box success radius  small-20 medium-14 large-20 columns round" style="text-align: center;font-weight: bold;">
                        {{ Session::get('message') }}
                        <a href="#" class="close">&times;</a>
                    </div>
                @endif
                @if((Session::has('type')) && (Session::get('type')=='error'))
                    <div data-alert class="alert-box alert radius  small-20 medium-14 large-20 columns round" style="text-align: center;font-weight: bold;">
                        {{ Session::get('message') }}
                        <a href="#" class="close">&times;</a>
                    </div>
                @endif
            @endif
            <div class="row">
                <div class="hide-for-small-only medium-6 large-6 columns">
                    {!! Form::label('name', 'Name :' ,array('class' => 'inline')) !!}
                </div>
                <div class="small-20 medium-14 large-14 columns left">
                    {!! Form::text('name', Input::old('name'), array('class' => 'inline','id' => 'name','placeholder' => 'Name')) !!}
                </div>
            </div>
            <div class="row">
                <div class="hide-for-small-only medium-6 large-6 columns">
                    {!! Form::label('email', 'Email :' ,array('class' => 'inline')) !!}
                </div>
                <div class="small-20 medium-14 large-14 columns left">
                    {!! Form::email('email', Input::old('email'), array('class' => 'inline','id' => 'email','placeholder' => 'Email')) !!}
                </div>
            </div>
            <div class="row">
                <div class="hide-for-small-only medium-6 large-6 columns">
                    {!! Form::label('subject', 'Subject :',array('class' => 'inline')) !!}
                </div>
                <div class="small-20 medium-14 large-14 columns left">
                    {!! Form::text('subject', Input::old('subject'),array('class' => 'inline','id' => 'subject','placeholder' => 'Subject ')) !!}
                </div>
            </div>
            <div class="row">
                <div class="hide-for-small-only medium-6 large-6 columns">
                    {!! Form::label('message', 'Message :',array('class' => 'inline')) !!}
                </div>
                <div class="small-20 medium-14 large-14 columns left">
                    {!! Form::textarea('message', null, ['size' => '30x5']) !!}
                </div>
            </div>
            <div class="row">
                <div class="hide-for-small-only medium-6 large-6 columns">
                    {!! Form::label('captcha', 'Captcha :',array('class' => 'inline')) !!}
                </div>
                <div style="margin-top: 10px;" class="small-20 medium-14 large-14 columns right">
                    {!! app('captcha')->display() !!}
                </div>
            </div>
            <div style="text-align: center;margin-top: 10px;" class="login_btn small-20 medium-20 large-20 columns">
                <input type="submit" class="small button radius" name="submit" value="Submit">
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@include('footer')