@extends('layouts.base', ['title' => 'Contactez-nous'])

@section('content')

<div class="container mt-5">
    <h2>Un devis sur mesure ? <br> Ou besoin de précision ? </h2>
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action=""> <!--" route('contact.store') "-->

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="name" id="name" required="required">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" required="required">
            </div>

            <div class="form-group">
                <label>Téléphone</label>
                <input type="text" class="form-control" name="phone" id="phone" required="required">
            </div>

            <div class="form-group">
                <label>Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" required="required">
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="10" required="required"></textarea>
            </div>

            <input type="submit" name="send" value="Envoyé" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection