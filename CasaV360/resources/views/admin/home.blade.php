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
                    @foreach ($mails as $mail) 
                        <h2>Email numéro: {{ $mail->id }}</h2>
                        <li><strong>Nom:</strong> {{ $mail->name }}</li>
                        <li><strong>Email:</strong> {{ $mail->email }}</li>
                        <li><strong>Sujet:</strong> {{ $mail->subject }}</li>
                        <li><strong>Message:</strong> {{ $mail->message }}</li>
                        ------------------------------
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
