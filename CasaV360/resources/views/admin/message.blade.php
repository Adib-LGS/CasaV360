@extends('layouts.app')

@section('content')
<p>Email numéro: {{ $mail->id }}</p>
<p><strong>Message:</strong> {{ $mail->message }}</p>
@endsection