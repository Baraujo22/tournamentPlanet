<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TP - Modality Designer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Passion+One&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js\modalityForm.js') }}"></script>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css')}}">

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
    </head>
    <body class="antialiased">
        @include('layouts.panel')
        <div class="relative d-flex items-top justify-left min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="background:#EDE5E3">

            
            @include('loginmenu') 

            <!-- main section -->
            <!-- Help -->
    
        
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
                
                <!-- Welcome -->
                <div class="welcome mt-8 shadow text-lg mainbg">
                    <div class=" ml-12 mr-12">
                        <div class="ml-12 text-lg">
                            <h1 class="fontawesome shadow">
                                Modality Designer
                            </h1>
                            <p style="padding-top:2rem; color: #B16487">
                            
                                In this module, you will create a template for specific modality of game you are trying to play.
                                <br>
                                This way, once created, that modality can be used again and again. You can always go back and modify it according to your gaming needs.
                                Tournaments Planet also includes preexisting modalities for you to choose from if you are not quite the creator or want to go straight to a regular game preset.
                                <br>
                            </p>
                            
                        </div>
                    </div>
                </div>

                
                <div style="align-items: center">
                    @include('layouts.modalityForm')
                </div>
                

            </div>
    @include('layouts.footer')
</body>
</html>
<script src="{{ url('js/accordion.js') }}"></script>
