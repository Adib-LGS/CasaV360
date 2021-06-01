@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Liste de tout les emails:</h1>
                    <br>
                    @if($mails->count() > 0)
                    @foreach ($mails as $mail) 
                        <h2>Email numéro: {{ $mail->id }}</h2>
                        <li><a href="{{ route('admin.message', ['id' => $mail->id]) }}"><strong>Nom:</strong> {{ $mail->name }}</a></li>
                        <li><strong>Email:</strong> {{ $mail->email }}</li>
                        <li><strong>Sujet:</strong> {{ $mail->subject }}</li>
                        ------------------------------
                    @endforeach
                    @else
                        <span>Il ni a aucun email pour le moment</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
