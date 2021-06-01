@extends('layouts.app')

@section('content')
<p>Mail numéro: {{ $mail->id }}</p>
<p><strong>Message:</strong> {{ $mail->message }}</p>
@endsection