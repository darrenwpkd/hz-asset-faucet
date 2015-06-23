@extends('layouts.master')

@section('content')
<section>
  <h1>Horizon Faucet</h1>

  <article id="post-1" class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-updates">
    <div class="team-member-info">
      <img class="team-picture rounded" src="/img/faucet.jpg" width="237" title="Horizon Faucet">
    </div>
    <div class="team-member-des">
      <?php $flash = Session::get('flash'); unset($flash['old'], $flash['new']); ?>
        @if(isset($flash))
          <div class="alert-container">
          @foreach($flash as $key => $msgs)
            @foreach($msgs as $msg)
            <?php $msg = is_array($msg) ? reset($msg) : $msg; ?>
            <div class="alert alert-{{ $key }} hidden-msg">
              <strong>{{ ucfirst($key) }}!</strong> {{ $msg }}
            </div>
            @endforeach
          @endforeach
          </div>
        @endif

        <p>Current balance: {{ $balance }} (dry below {{ $minbalance }})</p>
        <p>You can request a payout from the Horizon faucet once every {{ $timer }} hours.
        It will pay out between {{ $minamount }} and {{ $maxamount }} Horizon each time.</p>
        {{ Form::open(array('url' => '/payout', 'id' => 'request-form', 'onsubmit' => 'requestSubmit.disabled = true; return true;')) }}
            <div class="form-group">
                {{ Form::label('horizon-address', "Horizon Account ID") }}
                {{ Form::text('horizon-address', '', array('placeholder' => 'NHZ-____-____-____-_____', 'class' => 'form-control', 'style' => 'width: 100%; font-size: 110%; height: 100%;')) }}
                {{ Form::label('horizon-pubkey', "Horizon Public Key (required if the account is brand new)") }}
                {{ Form::text('horizon-pubkey', '', array('placeholder' => '________________________________________________________________', 'class' => 'form-control', 'style' => 'width: 100%; font-size: 110%; height: 100%;')) }}
            </div>
            <div class="form-group" style="margin-bottom: 4px;">
                {{ Form::captcha() }}
            </div>
            
            <div class="form-group">
                {{ Form::button('Request!', array('type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'requestSubmit')) }}
            </div>

        {{ Form::close() }}

    </div>
  </article>

</section>
@stop
